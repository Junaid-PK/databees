<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CallMetricsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Calls', '1,247')
                ->description('All incoming calls')
                ->descriptionIcon('heroicon-m-phone')
                ->color('info')
                ->chart([120, 145, 138, 152, 168, 142, 155, 147]),

            Stat::make('ANS', '1,089')
                ->description('Answered calls (87.3%)')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success')
                ->chart([105, 128, 119, 135, 147, 125, 138, 131]),

            Stat::make('ABN', '112')
                ->description('Abandoned calls (9.0%)')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('warning')
                ->chart([12, 14, 15, 13, 17, 13, 14, 12]),

            Stat::make('IVR Drop', '46')
                ->description('Dropped in IVR (3.7%)')
                ->descriptionIcon('heroicon-m-phone-x-mark')
                ->color('danger')
                ->chart([3, 3, 4, 4, 4, 4, 3, 4]),
        ];
    }
}
