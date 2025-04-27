@props([
    'title',
    'subtitle',
])

<div class='bg-banner container mx-auto flex flex-col items-center justify-center gap-10 rounded-2xl bg-cover bg-center px-8 py-6'>
    <div class='flex flex-col items-center gap-8'>
        <div class='flex flex-col items-center gap-1'>
            <h2 class='text-body-large text-foreground-secondary text-center font-normal'>{{ $subtitle }}</h2>
            <h1 class='text-headline-large md:text-display-medium text-center'>{!! $title !!}</h1>
        </div>
        {{ $slot }}
    </div>
</div>
