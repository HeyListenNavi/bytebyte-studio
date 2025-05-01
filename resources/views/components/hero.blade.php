<div class="grid h-svh grid-rows-[90px_1fr]">

    @include("layouts.navbar")

    <div {{ $attributes->merge(["class" => "container mx-auto px-4 flex flex-col lg:flex-row items-center gap-16 justify-center lg:justify-around"]) }}>
        {{ $slot }}
    </div>
</div>
