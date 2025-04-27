@props([
    'title',
    'background' => 'bg-background-light'
])

<div tabindex="0" {{ $attributes->merge(['class' => "text-foreground-tertiary after:bg-highlight before:bg-highlight relative flex h-[240px] md:h-[250px] w-full md:w-[320px] shrink-0 snap-center flex-col justify-end rounded-2xl p-6 before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:opacity-0 before:blur-sm before:transition-opacity after:absolute after:left-0 after:top-0 after:-z-10 after:h-full after:w-full after:opacity-0 after:blur-sm after:transition-opacity hover:before:opacity-100 hover:after:opacity-100 focus:before:opacity-100 focus:after:opacity-100 " . $background]) }}>
    <p class='text-label-large'>{{ $title }}</p>
</div>

