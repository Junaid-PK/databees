<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Active Skills
        </x-slot>

        <div style="display: grid; gap: 1rem;">
            @foreach($this->getSkills() as $index => $skill)
                @php
                    $colors = [
                        ['from' => 'rgb(59, 130, 246)', 'to' => 'rgb(37, 99, 235)', 'border' => 'rgb(59, 130, 246)'],
                        ['from' => 'rgb(16, 185, 129)', 'to' => 'rgb(5, 150, 105)', 'border' => 'rgb(16, 185, 129)'],
                        ['from' => 'rgb(139, 92, 246)', 'to' => 'rgb(109, 40, 217)', 'border' => 'rgb(139, 92, 246)'],
                        ['from' => 'rgb(236, 72, 153)', 'to' => 'rgb(219, 39, 119)', 'border' => 'rgb(236, 72, 153)'],
                        ['from' => 'rgb(251, 146, 60)', 'to' => 'rgb(249, 115, 22)', 'border' => 'rgb(251, 146, 60)'],
                    ];
                    $color = $colors[$index % count($colors)];
                @endphp
                
                <div style="background: white; border-radius: 0.75rem; border: 2px solid {{ $color['border'] }}; box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);">
                    <div style="background: linear-gradient(135deg, {{ $color['from'] }} 0%, {{ $color['to'] }} 100%); padding: 1rem 1.5rem; border-radius: 0.625rem 0.625rem 0 0;">
                        <h3 style="font-size: 1.125rem; font-weight: 600; color: white; margin: 0;">
                            {{ $skill['name'] }}
                        </h3>
                    </div>
                    
                    <div style="padding: 1.5rem;">
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 1.25rem;">
                            <div style="background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, rgba(59, 130, 246, 0.1) 100%); padding: 1rem; border-radius: 0.5rem; border: 1px solid rgba(59, 130, 246, 0.2);">
                                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                    <div style="display: flex; height: 2.5rem; width: 2.5rem; align-items: center; justify-content: center; border-radius: 9999px; background: {{ $color['from'] }};">
                                        <svg style="height: 1.25rem; width: 1.25rem; color: white;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div style="font-size: 0.75rem; font-weight: 600; color: rgb(71, 85, 105); text-transform: uppercase; letter-spacing: 0.05em;">Answered</div>
                                </div>
                                <div style="font-size: 1.875rem; font-weight: 700; color: rgb(15, 23, 42);">{{ $skill['answered'] }}</div>
                            </div>

                            <div style="background: rgba(0, 0, 0, 0.02); padding: 1rem; border-radius: 0.5rem; border: 1px solid rgba(0, 0, 0, 0.06);">
                                <div style="font-size: 0.75rem; font-weight: 600; color: rgb(100, 116, 139); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Agents</div>
                                <div style="font-size: 1.875rem; font-weight: 700; color: rgb(15, 23, 42);">{{ $skill['agents'] }}</div>
                            </div>

                            <div style="background: rgba(0, 0, 0, 0.02); padding: 1rem; border-radius: 0.5rem; border: 1px solid rgba(0, 0, 0, 0.06);">
                                <div style="font-size: 0.75rem; font-weight: 600; color: rgb(100, 116, 139); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">In Queue</div>
                                <div style="font-size: 1.875rem; font-weight: 700; color: rgb(15, 23, 42);">{{ $skill['in_queue'] }}</div>
                            </div>

                            <div style="background: rgba(0, 0, 0, 0.02); padding: 1rem; border-radius: 0.5rem; border: 1px solid rgba(0, 0, 0, 0.06);">
                                <div style="font-size: 0.75rem; font-weight: 600; color: rgb(100, 116, 139); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">On Hold</div>
                                <div style="font-size: 1.875rem; font-weight: 700; color: rgb(15, 23, 42);">{{ $skill['on_hold'] }}</div>
                            </div>

                            <div style="background: rgba(0, 0, 0, 0.02); padding: 1rem; border-radius: 0.5rem; border: 1px solid rgba(0, 0, 0, 0.06);">
                                <div style="font-size: 0.75rem; font-weight: 600; color: rgb(100, 116, 139); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Talk Time</div>
                                <div style="font-size: 1.25rem; font-weight: 700; color: rgb(15, 23, 42);">{{ $skill['talk_time'] }}</div>
                            </div>

                            <div style="background: rgba(0, 0, 0, 0.02); padding: 1rem; border-radius: 0.5rem; border: 1px solid rgba(0, 0, 0, 0.06);">
                                <div style="font-size: 0.75rem; font-weight: 600; color: rgb(100, 116, 139); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">AHT</div>
                                <div style="font-size: 1.25rem; font-weight: 700; color: rgb(15, 23, 42);">{{ $skill['aht'] }}</div>
                            </div>

                            <div style="background: linear-gradient(135deg, rgba(34, 197, 94, 0.05) 0%, rgba(34, 197, 94, 0.1) 100%); padding: 1rem; border-radius: 0.5rem; border: 1px solid rgba(34, 197, 94, 0.2);">
                                <div style="font-size: 0.75rem; font-weight: 600; color: rgb(71, 85, 105); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">SLA</div>
                                <div style="font-size: 1.875rem; font-weight: 700; color: rgb(22, 163, 74);">{{ $skill['sla'] }}%</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
