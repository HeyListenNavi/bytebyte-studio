@extends('layouts.app')

@section('title', 'Nosotros')

@section('body')
    <x-hero>
        <div class="col-span-2 flex flex-col lg:flex-row gap-8 items-center">
            <div class="hidden lg:flex bg-light-borders flex-col justify-stretch items-stretch w-fit min-h-[250px] rounded-2xl p-[1px]">
                <div class="text-headline-large from-background to-highlight-dark grow flex flex-col justify-center gap-4 rounded-2xl bg-gradient-to-br px-6 py-8 text-end">
                    <h2>Simple.</h2>
                    <h2>Eficiente.</h2>
                    <h2>Accesible.</h2>
                </div>
            </div>
            <div class="flex flex-col items-center md:items-start gap-6">
                <div>
                    <h3 class="text-body-medium md:text-body-large text-center md:text-start text-foreground-secondary font-normal">ByteByte Studio</h3>
                    <h1 class="text-display-medium md:text-display-large text-center md:text-start from-foreground to-foreground-tertiary bg-gradient-to-r from-40% to-90% bg-clip-text text-transparent">El cambio que tu empresa necesita</h1>
                </div>
                <div class="w-full flex flex-col gap-4 md:gap-0 md:flex-row justify-between items-center">
                    <p class="text-body-small md:text-body-medium text-secondary text-center md:text-start">
                        <span>
                            En ByteByte Studio transformamos tu negocio con tecnología que se adapta a ti:
                        </span>
                        <br>
                        <span class="font-bold">
                            Simple, funcional y lista para llevarte al siguiente nivel.
                        </span>
                    </p>
                    <x-button href="{{ route('services') }}" class="text-label-large">
                        <span>Comenzar</span>
                        <x-bx-arrow-up-right></x-bx-arrow-up-right>
                    </x-button> 
                </div>
            </div>
        </div>
    </x-hero>

    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center align-middle justify-center gap-10">
        <div class="flex flex-col gap-6">
            <h1 class="text-display-medium">
                Ya estamos ayudando a otras empresas
                <br>
                Queremos ayudarte a ti también
            </h1>
            <p class="text-body-small text-secondary">
                Nos especializamos en el desarrollo de software a medida, aplicaciones web y móviles que se adaptan a las necesidades específicas de tu negocio. Desde la idea hasta la implementación, te acompañamos en cada paso del proceso para crear soluciones tecnológicas que optimicen tu operación y mejoren tu presencia digital.
            </p>
            <x-button.text href="{{ route('contact-us') }}" class="text-label-large">
                <span>Cotizar Servicio</span>
                <i class="bx bx-chevron-right"></i>
            </x-button.text>
        </div>
        <div class="bg-light-borders flex flex-col justify-stretch items-stretch w-fit rounded-2xl p-[1px]">
            <div class="from-background to-highlight-dark grow flex flex-col justify-center gap-6 rounded-2xl bg-gradient-to-br px-6 py-8">
                <h2 class="text-headline-large">Software diseñado para Ti</h2>
                <ul class="flex flex-col gap-3">
                    <li class="flex items-center gap-2 text-body-small">
                        <i class="bx bx-cube-alt"></i>
                        <p>Landing Pages</p>
                    </li>

                    <li class="flex items-center gap-2 text-body-small">
                        <i class="bx bx-cube-alt"></i>
                        <p>Sitios Web</p>
                    </li>

                    <li class="flex items-center gap-2 text-body-small">
                        <i class="bx bx-cube-alt"></i>
                        <p>Tiendas en Línea</p>
                    </li>

                    <li class="flex items-center gap-2 text-body-small">
                        <i class="bx bx-cube-alt"></i>
                        <p>Software a la medida</p>
                    </li>

                    <li class="flex items-center gap-2 text-body-small">
                        <i class="bx bx-cube-alt"></i>
                        <p>Chatbots</p>
                    </li>

                    <li class="flex items-center gap-2 text-body-small">
                        <i class="bx bx-cube-alt"></i>
                        <p>Consultorías</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 flex flex-col items-center align-middle justify-center gap-10">
        <div class="flex flex-col items-center gap-6">
            <h2 class="text-center text-body-large text-foreground-secondary font-normal">Proceso de Trabajo</h2>
            <h1 class="text-center text-display-medium">¿Cómo Trabajamos en ByteByte Studio?</h1>
        </div>
        <p class="text-body-small text-secondary">
            Trabajamos en ciclos cortos: aplicamos los pasos de análisis, diseño, desarrollo y entrega para cada funcionalidad (feature) de tu proyecto. Esto nos permite avanzar de manera flexible, trabajando siempre de la mano contigo. Creemos que el cliente es parte activa del proceso, por lo que tu participación constante es esencial para lograr resultados que realmente se adapten a tus necesidades.
        </p>
        <div class="w-full divide-y divide-secondary/20">
            <div class="px-4 grid justify-center lg:grid-cols-2 items-center gap-4 py-10">
                <div class="flex justify-center md:justify-start gap-4 text-headline-large">
                    <i class="bx bx-search-alt"></i>
                    <h3>1. Análisis</h3>
                </div>
                <ul class="flex flex-col gap-4 text-body-small md:text-body-medium list-disc">
                    <li>Charla inicial para conocer tus objetivos.</li>
                    <li>Evaluamos tus necesidades técnicas y de mercado.</li>
                    <li>Creamos un plan personalizado</li>
                </ul>
            </div>
            <div class="px-4 grid justify-center lg:grid-cols-2 items-center gap-4 py-10">
                <div class="flex justify-center md:justify-start gap-4 text-headline-large">
                    <i class="bx bx-palette"></i>
                    <h3>2. Diseño</h3>
                </div>
                <ul class="flex flex-col gap-4 text-body-small md:text-body-medium list-disc">
                    <li>Creamos prototipos y wireframes para tu aprobación.</li>
                    <li>Evaluamos tus necesidades técnicas y de mercado.</li>
                    <li>Ajustamos los detalles basados en tu opinión.</li>
                </ul>
            </div>
            <div class="px-4 grid justify-center lg:grid-cols-2 items-center gap-4 py-10">
                <div class="flex justify-center md:justify-start gap-4 text-headline-large">
                    <i class="bx bx-code-alt"></i>
                    <h3>3. Desarrollo</h3>
                </div>
                <ul class="flex flex-col gap-4 text-body-small md:text-body-medium list-disc">
                    <li>Trabajamos en partes pequeñas (1-2 semanas cada una).</li>
                    <li>Cada 15 días te mostramos avances reales.</li>
                    <li>Corregimos y mejoramos en el camino.</li>
                    <li>Hablamos contigo acerca de como avanza el proyecto.</li>
                </ul>
            </div>
            <div class="px-4 grid justify-center lg:grid-cols-2 items-center gap-4 py-10">
                <div class="flex justify-center md:justify-start gap-4 text-headline-large">
                    <i class="bx bx-rocket"></i>
                    <h3>4. Entrega</h3>
                </div>
                <ul class="flex flex-col gap-4 text-body-small md:text-body-medium list-disc">
                    <li>Te mostramos el trabajo que hicimos</li>
                    <li>Entregamos manuales sencillos y damos capacitación.</li>
                </ul>
            </div>
        </div>
    </div>

    <x-banner
        title="Proveemos soluciones que escalan junto con tu negocio"
        subtitle="¿Qué nos diferencia?"
    >
        <x-button href="{{ route('contact-us') }}" class="text-label-large">
            <span>Digitalízate Ya</span>
            <x-bx-arrow-up-right></x-bx-arrow-up-right>
        </x-button>
    </x-banner>

    {{-- <div class="container mx-auto px-4 flex flex-col items-center align-middle justify-center gap-10">
        <div class="flex flex-col items-center gap-6">
            <h2 class="text-center text-body-large text-foreground-secondary font-normal">Nuestro Equipo</h2>
            <h1 class="text-center text-display-medium">¡Conoce al Equipo!</h1>
        </div>
    </div> --}}
@endsection