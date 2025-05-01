@props([
    "icon",
    "title",
    "subtitle",
    "text",
    "href",
])

<div {{ $attributes->merge(["class" => "min-h-[500px] border-tertiary flex w-full flex-col justify-center gap-5 rounded-2xl border px-5 py-6"]) }}>
    <i class="bx {{ $icon }} !text-9xl"></i>
    <div>
        <h2 class="text-body-small">{{ $title }}</h2>
        <h1 class="text-headline-medium">{{ $subtitle }}</h1>
    </div>
    <p class="text-body-small text-foreground-secondary">{{ $text }}</p>
    <x-button.text class="text-label-large" href="{{ $href }}">
        <span>Leer Más</span>
        <x-bx-arrow-up-right></x-bx-arrow-up-right>
    </x-button.text>
    {{ $slot }}
</div>
