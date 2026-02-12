<div class="p-4 sm:p-6 lg:p-8">
    <div class="max-w-screen-2xl">


        @php
            $statuses = [
                'pendiente' => 'Pendiente',
                'en_proceso' => 'En Proceso',
                'revision' => 'Revisión',
                'cerrado' => 'Cerrado',
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

            @foreach ($statuses as $key => $label)
                <div>
                    <div class="rounded-2xl p-4 shadow-sm h-[65vh] flex flex-col transition-colors"
                        style="background-color: var(--bg-card);
                           border: 1px solid var(--border-color);">

                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xs sm:text-sm font-bold uppercase" style="color: var(--text-secondary);">
                                {{ $label }}
                            </h2>

                            <span id="count-{{ $key }}" class="text-xs px-2 py-1 rounded-full"
                                style="background-color: var(--bg-badge);
                                   color: var(--text-secondary);">
                                0
                            </span>
                        </div>

                        <div id="{{ $key }}" class="column flex-1 overflow-y-auto space-y-4 p-1 min-h-[150px]">
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
