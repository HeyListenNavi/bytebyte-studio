@extends('layouts.app')

@section('body')
    <x-hero>
        <h1
            class="text-display-medium md:text-display-large from-foreground to-foreground-tertiary bg-gradient-to-r from-40% to-90% bg-clip-text text-end text-transparent md:text-start">
            Proyecto 1</h1>
        <img class="w-full max-w-2xl" src="{{ Vite::asset('resources/images/project-placeholder.png') }}" alt="">
    </x-hero>
    <div class="container mx-auto grid items-center gap-4 px-4 lg:grid-cols-2">
        <img class="w-full max-w-2xl" src="{{ Vite::asset('resources/images/project-placeholder.png') }}" alt="">
        <div class="flex flex-col gap-1">
            <h2 class="text-display-medium">¿Quiénes Son?</h2>
            <p class="text-body-medium text-foreground-secondary">Nos especializamos en el desarrollo de software a medida,
                aplicaciones web y móviles que se adaptan a las necesidades específicas de tu negocio. Desde la idea hasta
                la implementación, te acompañamos en cada paso del proceso para crear soluciones tecnológicas que optimicen
                tu operación y mejoren tu presencia digital.</p>
        </div>
    </div>
    <div class="container mx-auto grid items-center gap-4 px-4 lg:grid-cols-2">
        <div class="flex flex-col gap-1">
            <h2 class="text-display-medium">¿Cómo les ayudamos?</h2>
            <p class="text-body-medium text-foreground-secondary">Nos especializamos en el desarrollo de software a medida,
                aplicaciones web y móviles que se adaptan a las necesidades específicas de tu negocio. Desde la idea hasta
                la implementación, te acompañamos en cada paso del proceso para crear soluciones tecnológicas que optimicen
                tu operación y mejoren tu presencia digital.</p>
        </div>
        <img class="w-full max-w-2xl" src="{{ Vite::asset('resources/images/project-placeholder.png') }}" alt="">
    </div>
@endsection
