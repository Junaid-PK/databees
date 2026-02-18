<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DayStatsWidget extends StatsOverviewWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('AHT', '06:32')
                ->description('Average Handle Time')
                ->descriptionIcon('heroicon-m-clock')
                ->color('info'),

            Stat::make('ATT', '04:45')
                ->description('Average Talk Time')
                ->descriptionIcon('heroicon-m-phone')
                ->color('success'),

            Stat::make('ACW', '01:47')
                ->description('After Call Work')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('warning'),

            Stat::make('ASA', '00:23')
                ->description('Average Speed to Answer')
                ->descriptionIcon('heroicon-m-clock')
                ->color('primary'),
        ];
    }
}
