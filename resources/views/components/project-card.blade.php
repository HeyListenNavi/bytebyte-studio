@props([
    'title',
    'subtitle',
    'description',
    'href',
    'src',
])

<a class="flex" href="{{ $href }}">
    <div class="flex flex-col gap-6">
        <img src="{{ $src }}" class="object-contain h-[300px] w-full rounded-2xl"/>
        <div class="px-2 flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h2 class="text-body-medium text-foreground-secondary">{{ $subtitle }}</h2>
                <h1 class="text-headline-medium">{{ $title }}</h1>
            </div>

            <div class="text-body-small text-foreground-secondary">
                {!! $description !!}
            </div>
            {{ $slot }}
            <span class="flex items-center text-label-large self-end bg-none hover:text-foreground-secondary transition-colors cursor-pointer">
                <span>Ver Más</span>
                <x-bx-arrow-up-right></x-bx-arrow-up-right>
            </span>
        </div>
    </div>
</a>