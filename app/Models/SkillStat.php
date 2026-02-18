<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class SkillStat extends Model
{
    use Sushi;

    protected $rows = [
        [
            'id' => 1,
            'skill' => 'Agtl_Sales',
            'agent' => 12,
            'total_calls' => 348,
            'dropped_calls' => 24,
            'connected_calls' => 324,
            'available_agents' => 4,
            'in_queue_calls' => 3,
            'aux_agents' => 2,
        ],
        [
            'id' => 2,
            'skill' => 'agtl_Complaints',
            'agent' => 8,
            'total_calls' => 215,
            'dropped_calls' => 28,
            'connected_calls' => 187,
            'available_agents' => 2,
            'in_queue_calls' => 2,
            'aux_agents' => 3,
        ],
        [
            'id' => 3,
            'skill' => 'agtlInformation',
            'agent' => 15,
            'total_calls' => 456,
            'dropped_calls' => 44,
            'connected_calls' => 412,
            'available_agents' => 5,
            'in_queue_calls' => 5,
            'aux_agents' => 1,
        ],
        [
            'id' => 4,
            'skill' => 'GTS',
            'agent' => 6,
            'total_calls' => 178,
            'dropped_calls' => 22,
            'connected_calls' => 156,
            'available_agents' => 2,
            'in_queue_calls' => 1,
            'aux_agents' => 1,
        ],
        [
            'id' => 5,
            'skill' => 'Omni',
            'agent' => 4,
            'total_calls' => 112,
            'dropped_calls' => 14,
            'connected_calls' => 98,
            'available_agents' => 1,
            'in_queue_calls' => 0,
            'aux_agents' => 2,
        ],
        [
            'id' => 6,
            'skill' => 'OutBound',
            'agent' => 5,
            'total_calls' => 89,
            'dropped_calls' => 6,
            'connected_calls' => 83,
            'available_agents' => 2,
            'in_queue_calls' => 0,
            'aux_agents' => 0,
        ],
        [
            'id' => 7,
            'skill' => 'SPANCOP',
            'agent' => 7,
            'total_calls' => 134,
            'dropped_calls' => 18,
            'connected_calls' => 116,
            'available_agents' => 3,
            'in_queue_calls' => 2,
            'aux_agents' => 1,
        ],
        [
            'id' => 8,
            'skill' => 'VFS',
            'agent' => 9,
            'total_calls' => 267,
            'dropped_calls' => 35,
            'connected_calls' => 232,
            'available_agents' => 3,
            'in_queue_calls' => 4,
            'aux_agents' => 1,
        ],
        [
            'id' => 9,
            'skill' => 'NPS',
            'agent' => 3,
            'total_calls' => 56,
            'dropped_calls' => 8,
            'connected_calls' => 48,
            'available_agents' => 1,
            'in_queue_calls' => 1,
            'aux_agents' => 0,
        ],
    ];
}
