<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex flex-col items-center justify-between gap-6 md:flex-row">
            <div class="flex items-center gap-4">
                <div class="bg-primary-500/10 text-primary-600 rounded-xl p-3">
                    <x-heroicon-o-sparkles class="h-8 w-8" />
                </div>
                <div>
                    <h2 class="text-2xl font-bold tracking-tight text-gray-950 dark:text-white">
                        Welcome back, {{ auth()->user()->name }}
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        {{ auth()->user()->email }} &bull; ByteByte Studio Dashboard
                    </p>
                </div>
            </div>

            <x-filament::button
                href="{{ url('/portfolio') }}"
                tag="a"
                target="_blank"
                icon="heroicon-m-globe-alt"
                color="gray"
            >
                View Portfolio
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
