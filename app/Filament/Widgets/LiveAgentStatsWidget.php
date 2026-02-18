<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LiveAgentStatsWidget extends StatsOverviewWidget
{
    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = 'full';

    protected ?string $heading = 'Live Agent Stats';

    protected ?string $pollingInterval = '5s';

    protected function getStats(): array
    {
        return [
            Stat::make('AVL', '12')
                ->description('Available agents')
                ->descriptionIcon('heroicon-m-user-circle')
                ->color('success'),

            Stat::make('Conn', '18')
                ->description('Connected agents')
                ->descriptionIcon('heroicon-m-phone')
                ->color('info'),

            Stat::make('ACW', '5')
                ->description('After Call Work')
                ->descriptionIcon('heroicon-m-document')
                ->color('warning'),

            Stat::make('T-M', '3')
                ->description('Talk/Manual')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('primary'),

            Stat::make('OB', '2')
                ->description('Outbound')
                ->descriptionIcon('heroicon-m-arrow-up-circle')
                ->color('indigo'),

            Stat::make('AUX', '8')
                ->description('Auxiliary')
                ->descriptionIcon('heroicon-m-pause-circle')
                ->color('gray'),
        ];
    }
}
