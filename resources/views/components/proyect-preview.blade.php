@props([
    'title',
    'background' => 'bg-background-light',
    'href' => '#',
])

<x-glow class="md:first:ml-96 md:last:mr-96 select-none" type="hover">
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex shrink-0 snap-center flex-col justify-end rounded-2xl p-6 h-[250px] w-[320px]']) }}>
        <img src="{{ $background }}" alt="Project Image">
        <p class="text-label-large">{{ $title }}</p>
    </a>
</x-glow>