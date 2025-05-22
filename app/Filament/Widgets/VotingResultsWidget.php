<?php

namespace App\Filament\Widgets;

use App\Models\Vote;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget;

class VotingResultsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return Vote::selectRaw('candidate_id, COUNT(*) as total')
            ->groupBy('candidate_id')
            ->with('candidate')
            ->get()
            ->map(fn ($vote) =>
                Stat::make($vote->candidate->name, "{$vote->total} votes")
            )->toArray();
    }
}
