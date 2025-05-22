<?php

namespace App\Filament\Widgets;

use App\Models\Participant;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget;

class ParticipantSummaryWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return Participant::selectRaw('event_id, COUNT(*) as total')
            ->groupBy('event_id')
            ->with('event')
            ->get()
            ->map(fn ($row) =>
                Stat::make($row->event->title ?? 'Unknown Event', "{$row->total} participants")
            )->toArray();
    }
}

