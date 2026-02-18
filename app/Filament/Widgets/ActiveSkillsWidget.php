<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class ActiveSkillsWidget extends Widget
{
    protected static ?int $sort = 7;

    protected int|string|array $columnSpan = 'full';

    protected string $view = 'filament.widgets.active-skills-widget';

    public function getSkills(): array
    {
        return [
            [
                'name' => 'Agtl_Sales',
                'answered' => 324,
                'agents' => 12,
                'in_queue' => 3,
                'on_hold' => 1,
                'talk_time' => '02:34:52',
                'aht' => '6:45',
                'sla' => 94,
            ],
            [
                'name' => 'agtl_Complaints',
                'answered' => 187,
                'agents' => 8,
                'in_queue' => 2,
                'on_hold' => 0,
                'talk_time' => '01:58:14',
                'aht' => '8:12',
                'sla' => 89,
            ],
            [
                'name' => 'agtlInformation',
                'answered' => 412,
                'agents' => 15,
                'in_queue' => 5,
                'on_hold' => 2,
                'talk_time' => '03:12:45',
                'aht' => '5:23',
                'sla' => 96,
            ],
            [
                'name' => 'GTS',
                'answered' => 156,
                'agents' => 6,
                'in_queue' => 1,
                'on_hold' => 0,
                'talk_time' => '01:24:32',
                'aht' => '7:18',
                'sla' => 92,
            ],
            [
                'name' => 'Omni',
                'answered' => 98,
                'agents' => 4,
                'in_queue' => 0,
                'on_hold' => 1,
                'talk_time' => '00:52:18',
                'aht' => '6:05',
                'sla' => 98,
            ],
        ];
    }
}
