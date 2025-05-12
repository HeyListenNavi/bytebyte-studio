<div class="flex min-h-[calc(100svh-100px)]">
    <div {{ $attributes->merge(['class' => 'container mx-auto px-4 flex flex-col justify-center lg:grid lg:grid-cols-[1fr_40%] items-center gap-16 justify-items-center']) }}>
        {{ $slot }}
    </div>
</div>
