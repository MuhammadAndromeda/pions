<?php

namespace App\Filament\Resources\MemberApplicationResource\Pages;

use App\Enums\Position;
use App\Filament\Resources\MemberApplicationResource;
use App\Models\Member;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Spatie\Permission\Models\Role;

class ListMemberApplications extends ListRecords implements Tables\Contracts\HasTable
{
    protected static string $resource = MemberApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Name'),
                Tables\Columns\TextColumn::make('preferred_position')->label('Position'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state) => match ($state) {
                        'pending' => 'warning',
                        'accepted' => 'success',
                        'rejected' => 'danger',
                    }),
            ])
            ->actions([
                Tables\Actions\Action::make('accept')
                    ->label('Accept')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->visible(
                        fn($record) =>
                        $record->status === 'pending' &&
                        !Member::where('user_id', $record->user_id)->exists()
                    )
                    ->action(function ($record) {
                        // Add to members table
                        Member::create([
                            'user_id' => $record->user_id,
                            'position' => $record->preferred_position,
                            'period' => now()->format('Y'),
                        ]);

                        // Assign role if enum is valid
                        if (Position::tryFrom($record->preferred_position)) {
                            $record->user->syncRoles('PIONS');
                        }

                        $record->update(['status' => 'accepted']);
                    })
                    ->requiresConfirmation(),

                Tables\Actions\Action::make('reject')
                    ->label('Reject')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->visible(fn($record) => $record->status === 'pending')
                    ->action(fn($record) => $record->update(['status' => 'rejected']))
                    ->requiresConfirmation(),
            ]);
    }
}
