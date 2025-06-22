@props([
    'icon',
    'title',
    'subtitle',
    'text',
    'href',
])

<div {{ $attributes->merge(['class' => 'border-tertiary flex h-full w-full flex-col justify-center gap-5 rounded-2xl border px-5 py-6']) }}>
    <i class="bx {{ $icon }} !text-9xl"></i>
    <div>
        @isset($subtitle)
            <h2 class="text-body-small">{{ $subtitle }}</h2>
        @endisset
        <h1 class="text-headline-medium">{{ $title }}</h1>
    </div>
    <p class="text-body-small text-foreground-secondary">{{ $text }}</p>
    @isset($href)
        <x-button.text class="text-label-large" href="{{ $href }}">
            <span>Leer Más</span>
            <x-bx-arrow-up-right></x-bx-arrow-up-right>
        </x-button.text>
    @endisset
    {{ $slot }}
</div>
