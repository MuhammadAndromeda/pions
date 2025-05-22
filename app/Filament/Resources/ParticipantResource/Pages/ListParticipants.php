<?php

namespace App\Filament\Resources\ParticipantResource\Pages;

use App\Filament\Resources\ParticipantResource;
use App\Filament\Widgets\ParticipantSummaryWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParticipants extends ListRecords
{
    protected static string $resource = ParticipantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ParticipantSummaryWidget::class,
        ];
    }
}
