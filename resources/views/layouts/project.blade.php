@extends('layouts.app')

@section('body')
    <x-hero class="flex-col-reverse !gap-4 md:gap-16">
        <div class="flex flex-col gap-6">
            <div class="flex flex-col gap-1">
                <h1
                    class="text-balance text-headline-medium md:text-display-medium xl:text-display-large from-foreground to-foreground-tertiary bg-gradient-to-r from-40% to-90% bg-clip-text text-center text-transparent lg:text-start">
                    @yield('title')
                </h1>
                <h2 class="text-balance text-label-medium md:text-body-medium text-foreground-secondary text-center lg:text-start">
                    @yield('subtitle')
                </h2>
            </div>
            <x-button.text :href="$href" class="text-label-large self-start">
                Ver proyecto
                <x-bx-arrow-up-right></x-bx-arrow-up-right>
            </x-button.text>
        </div>
        <img class="w-full max-w-2xl" src=@yield('thumbnail') alt="">
    </x-hero>
    <div class="container mx-auto grid items-center gap-4 px-4 lg:grid-cols-2">
        <img class="w-full max-w-2xl rounded-2xl" src=@yield('mockup-one') alt="">
        <div class="flex flex-col gap-4">
            <h2 class="text-display-medium">¿Quiénes Son?</h2>
            <div class="text-body-small text-foreground-secondary">
                @yield('company-description')
            </div>
        </div>
    </div>
    <div class="container mx-auto grid items-center gap-4 px-4 lg:grid-cols-2">
        <div class="flex flex-col gap-4">
            <h2 class="text-display-medium">¿Cómo les ayudamos?</h2>
            <div class="text-body-small text-foreground-secondary">
                @yield('project-description')
            </div>
        </div>
        <img class="w-full max-w-2xl rounded-2xl" src=@yield('mockup-two') alt="">
    </div>
@endsection
