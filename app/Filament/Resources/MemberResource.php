<?php

namespace App\Filament\Resources;

use App\Enums\Position;
use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'PIONS';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->required()
                    ->label('User')
                    ->options(function () {
                        $usedUserIds = Member::pluck('user_id')->toArray();
                        return User::whereNotIn('id', $usedUserIds)->pluck('name', 'id');
                    })
                    ->searchable(),
                Forms\Components\Select::make('position')
                    ->label('Position (Role)')
                    ->options(Position::options())
                    ->searchable()
                    ->required(),
                Forms\Components\DatePicker::make('period')
                    ->required(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('photo')
                    ->collection('photos')
                    ->directory('photos')
                    ->disk('public')
                    ->preserveFilenames()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->badge()
                    ->label('Role/Position')
                    ->colors(Position::badgeColors())
                    ->sortable(),
                Tables\Columns\TextColumn::make('period')
                    ->searchable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('photo')
                    ->collection('photos')
                    ->label('Picture'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }

    public static function afterCreate($record): void
    {
        $user = $record->user;
        $role = $record->position;

        if ($user && $role) {
            $user->syncRoles([$role]);
        }
    }

    // protected static function getRoleColorMap(): array
    // {
    //     return [
    //         // 5 Pilar PIONS
    //         'President of Pions' => 'success',
    //         'Vice President of Pions' => 'success',
    //         'Vice Secretary of Pions' => 'success',
    //         'Secretary of Pions' => 'success',
    //         'Treasurer of Pions' => 'success',

    //         // Kepala Divisi
    //         'President of Media Division' => 'primary',
    //         'President of Education Division' => 'primary',
    //         'President of Event Division' => 'primary',
    //         'President of Ubudiyyah Division' => 'primary',
    //         'President of Public Relation' => 'primary',
    //         'President of Sports Division' => 'primary',
    //         'President of Cleanliness Division' => 'primary',

    //         // Anggota Divisi
    //         'Member of Ubudiyyah Division' => 'danger',
    //         'Member of Public Relation' => 'danger',
    //         'Member of Sports Division' => 'danger',
    //         'Member of Cleanliness Division' => 'danger',
    //         'Member of Media Division' => 'danger',
    //         'Member of Education Division' => 'danger',
    //         'Member of Event Division' => 'danger',
    //     ];
    // }

}
