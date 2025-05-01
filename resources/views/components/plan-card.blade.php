@props([
    "title",
    "subtitle",
    "items" => [],
    "href" => "#"
])
<div class="min-h-[450px] w-full pt-[1px] px-[1px] rounded-2xl bg-radial-[at_50%_0] from-secondary to-background/10 to-90%">
    <div {{ $attributes->merge(["class" => "w-full min-h-[450px] px-6 py-8 rounded-2xl bg-background flex flex-col justify-between"]) }}>
        <div class="flex flex-col gap-8">
            <div class="flex flex-col gap-1">
                <h2 class="text-body-medium">{{ $subtitle }}</h2>
                <h1 class="text-body-large">{{ $title }}</h1>
            </div>
            <ul class="flex flex-col gap-2">
                @foreach ($items as $item)
                <li class="text-body-small text-foreground-secondary flex items-center gap-1">
                    <i class="bx bx-check"></i>
                    {{ $item }}
                </li>
                @endforeach
            </ul>
        </div>
        <x-button.text class="text-label-large self-end" href="{{ $href }}">
            <span>Pedir Servicio</span>
            <x-bx-arrow-up-right></x-bx-arrow-up-right>
        </x-button.text>
    </div>
</div>