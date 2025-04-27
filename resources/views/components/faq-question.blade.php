@props([
    'faqs' => []
])

<ul {{ $attributes->merge(['class' => 'w-full flex flex-col gap-2']) }}>
    @foreach ($faqs as $faq)
        <li
            x-data="{ open: false }"
            x-on:click="open = !open"
            x-on:click.outside="open = false" 
            class="flex flex-col gap-2 p-4 select-none"
        >
            <div class='text-body-large flex justify-between gap-2 cursor-pointer'>
                <div class="flex items-center gap-1">
                    @if (array_key_exists('icon', $faq))
                        <i class="bx {{ $faq['icon'] }}"></i>
                    @endif
                    <h1>{{ $faq['title'] }}</h1>
                </div>
                <i
                    class='bx bx-chevron-up transition-transform'
                    x-bind:class="open ? 'bx-rotate-180' : ''"    
                ></i>
            </div>
            <p
                x-show="open"
                x-cloak
                x-collapse
                class='text-body-medium text-foreground-secondary'
            >
                {{ $faq['text'] }}
            </p>
        </li>
    @endforeach
</ul>