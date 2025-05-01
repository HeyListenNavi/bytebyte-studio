@props([
    "title",
    "description",
    "href"
])

<div class="flex flex-col gap-4">
    <div class="bg-secondary h-[300px] w-full rounded-2xl">
    </div>
    <div class="flex flex-col gap-1">
        <h1 class="text-headline-medium">{{ $title }}</h1>
        <p class="text-body-small text-foreground-secondary">{{ $description }}</p>
    </div>
    {{ $slot }}
    <x-button.text href="{{ $href }}" class="text-label-large">
        <span>Ver Más</span>
        <x-bx-arrow-up-right></x-bx-arrow-up-right>
    </x-button.text>
</div>
