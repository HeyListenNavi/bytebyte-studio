<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Projects', Project::count())
                ->description('Total projects in the portfolio')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('primary'),
            Stat::make('Published Projects', Project::where('is_published', true)->count())
                ->description('Projects visible on the frontend')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),
            Stat::make('Draft Projects', Project::where('is_published', '=', false)->count())
                ->description('Projects currently in draft')
                ->descriptionIcon('heroicon-m-pencil-square')
                ->color('warning'),
        ];
    }
}
