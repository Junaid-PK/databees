<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class AgentStatusChart extends ChartWidget
{
    protected static ?int $sort = 4;

    protected ?string $heading = 'Agent Status Distribution';

    protected ?string $description = 'Current breakdown of 48 agents by their status';

    protected ?string $maxHeight = '300px';

    protected int|string|array $columnSpan = 1;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Agents',
                    'data' => [12, 18, 5, 3, 2, 8],
                    'backgroundColor' => [
                        'rgb(34, 197, 94)',
                        'rgb(59, 130, 246)',
                        'rgb(251, 146, 60)',
                        'rgb(139, 92, 246)',
                        'rgb(236, 72, 153)',
                        'rgb(156, 163, 175)',
                    ],
                ],
            ],
            'labels' => ['Available', 'On Call', 'ACW', 'Manual', 'Outbound', 'Auxiliary'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'bottom',
                ],
                'tooltip' => [
                    'enabled' => true,
                ],
            ],
        ];
    }
}
