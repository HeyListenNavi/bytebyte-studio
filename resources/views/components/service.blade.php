@props([
    'title',
    'subtitle',
    'icon',
    'text',
    'item' => [],
    'href',
])

<div {{ $attributes->merge(['class' => 'flex flex-col lg:flex-row items-center gap-8 py-10']) }}>
    <i class="bx {{ $icon }} !text-[160px]"></i>
    <div class="flex flex-col gap-6">
        <div class="flex flex-col gap-1">
            <h2 class="text-body-large text-foreground font-normal">{{ $subtitle }}</h2>
            <h1 class="text-headline-large">{{ $title }}</h1>
        </div>
        <div class="text-body-small text-foreground-secondary flex flex-col gap-1">
            <p>{{ $text }}</p>
            <ul class="ml-6 flex list-disc flex-col gap-1">
                @foreach ($items as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        <x-button.text href="{{ $href }}" class="self-end text-label-large">
            <span>Cotizar Servicio</span>
            <x-bx-arrow-up-right></x-bx-arrow-up-right>
        </x-button.text>
    </div>
</div>
