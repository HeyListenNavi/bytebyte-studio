@extends("layouts.app")

@section("title", "Servicios")

@section("body")
    <x-hero>
        <div>
            <h1 class="text-display-medium md:text-display-large text-center from-foreground to-foreground-tertiary bg-gradient-to-r from-40% to-90% bg-clip-text text-transparent">Portafolio</h1>
            <h3 class="text-body-medium md:text-body-large text-center text-foreground-secondary font-normal">Ayudamos a empresas a construir su espacio en línea y expandir su alcance</h3>
        </div>
    </x-hero>

    <div class="hidden md:flex w-full justify-center text-body-large py-8 gap-10 bg-gradient-to-br from-highlight-dark to-highlight-dark/40">
        <span>Simple.</span>
        <span>🚀</span>
        <span>Eficiente.</span>
        <span>✨</span>
        <span>Accesible.</span>
    </div>

    <div class="container mx-auto px-4 grid md:grid-cols-2 items-center justify-center gap-16">
        <x-proyect-card
            title="Proyecto"
            description="Ayudamos a empresas a construir su espacio en linea y expandir su alcance"
            href="#"
        ></x-proyect-card>
        <x-proyect-card
            title="Proyecto"
            description="Ayudamos a empresas a construir su espacio en linea y expandir su alcance"
            href="#"
        ></x-proyect-card>
        <x-proyect-card
            title="Proyecto"
            description="Ayudamos a empresas a construir su espacio en linea y expandir su alcance"
            href="#"
        ></x-proyect-card>
        <x-proyect-card
            title="Proyecto"
            description="Ayudamos a empresas a construir su espacio en linea y expandir su alcance"
            href="#"
        ></x-proyect-card>
    </div>
@endsection
