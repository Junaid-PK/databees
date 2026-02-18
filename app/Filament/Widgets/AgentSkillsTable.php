<?php

namespace App\Filament\Widgets;

use App\Models\SkillStat;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class AgentSkillsTable extends TableWidget
{
    protected static ?int $sort = 6;

    protected int|string|array $columnSpan = 'full';

    protected static ?string $heading = 'Skill Based Statistics';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => SkillStat::query())
            ->columns([
                TextColumn::make('skill')
                    ->label('Skill')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('agent')
                    ->label('Agent')
                    ->sortable(),

                TextColumn::make('total_calls')
                    ->label('Total Calls')
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('dropped_calls')
                    ->label('Dropped Calls')
                    ->sortable()
                    ->alignCenter()
                    ->color('danger'),

                TextColumn::make('connected_calls')
                    ->label('Connected Calls')
                    ->sortable()
                    ->alignCenter()
                    ->color('success'),

                TextColumn::make('available_agents')
                    ->label('Available Agents')
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('in_queue_calls')
                    ->label('In Queue Calls')
                    ->sortable()
                    ->alignCenter()
                    ->color('warning'),

                TextColumn::make('aux_agents')
                    ->label('Aux Agents')
                    ->sortable()
                    ->alignCenter(),
            ])
            ->paginated([10, 25, 50]);
    }
}
