<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CallDistributionChart extends ChartWidget
{
    protected static ?int $sort = 5;

    protected ?string $heading = 'Call Volume Trends (Last 7 Days)';

    protected ?string $description = 'Daily call volumes showing total, answered, and abandoned calls';

    protected ?string $maxHeight = '300px';

    protected int|string|array $columnSpan = 1;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Total Calls',
                    'data' => [156, 178, 164, 189, 201, 142, 157],
                    'borderColor' => 'rgb(59, 130, 246)',
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'tension' => 0.3,
                    'fill' => true,
                ],
                [
                    'label' => 'Answered',
                    'data' => [142, 158, 145, 165, 178, 125, 139],
                    'borderColor' => 'rgb(34, 197, 94)',
                    'backgroundColor' => 'rgba(34, 197, 94, 0.1)',
                    'tension' => 0.3,
                    'fill' => true,
                ],
                [
                    'label' => 'Abandoned',
                    'data' => [14, 20, 19, 24, 23, 17, 18],
                    'borderColor' => 'rgb(239, 68, 68)',
                    'backgroundColor' => 'rgba(239, 68, 68, 0.1)',
                    'tension' => 0.3,
                    'fill' => true,
                ],
            ],
            'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'bottom',
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                ],
            ],
        ];
    }
}
