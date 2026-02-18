<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StaffingWidget extends StatsOverviewWidget
{
    protected static ?int $sort = 8;

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('On Shift', '48')
                ->description('Currently on shift')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success')
                ->chart([42, 45, 47, 48, 50, 49, 48]),

            Stat::make('Scheduled', '55')
                ->description('Scheduled for today')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('info')
                ->chart([55, 55, 55, 55, 55, 55, 55]),
        ];
    }
}
