@extends('layouts.app')

@section('title', 'ByteBite Studio')

@section('body')
    <x-hero>
        <div class="flex flex-col items-end md:items-start gap-6">
            <div class="flex flex-col gap-1">
                <h1 class="text-display-medium md:text-display-large text-end md:text-start from-foreground to-foreground-tertiary bg-gradient-to-r from-40% to-90% bg-clip-text text-transparent">ByteBite Studio</h1>
                <h3 class="text-body-medium md:text-body-large text-end md:text-start text-foreground-secondary font-normal">El cambio que tu empresa necesita</h3>
            </div>
            <x-button href="{{ route('contact-us') }}">Contactanos</x-button>
        </div>
        <div class="bg-light-borders w-full max-w-sm rounded-2xl p-[1px]">
            <div class="text-headline-large from-background to-highlight-dark flex flex-col gap-4 rounded-2xl bg-gradient-to-br px-6 py-8 text-end">
                <h2>Simple.</h2>
                <h2>Eficiente.</h2>
                <h2>Accesible.</h2>
            </div>
        </div>
    </x-hero>

    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-center gap-10">
        <img class="max-w-lg w-full" src="{{ Vite::asset("resources/images/about-us-laptop.png") }}" alt="">
        <div class="flex flex-col gap-6">
            <div class="flex flex-col gap-1">
                <h2 class="text-body-large text-foreground-secondary font-normal">Nosotros</h2>
                <h1 class="text-display-medium">
                    Ya estamos ayudando a otras empresas
                    <br>
                    Queremos ayudarte a ti también
                </h1>
            </div>
            <x-button.text href="{{ route('about-us') }}" class="text-label-large self-end md:self-start">
                <span>Leer Más</span>
                <x-bx-arrow-up-right></x-bx-arrow-up-right>
            </x-button.text>
        </div>
    </div>

    <div class="container mx-auto px-4 flex flex-col items-center justify-center gap-10">
        <div class="flex flex-col items-center gap-1">
            <h2 class="text-body-large text-foreground-secondary font-normal text-center">Nuestros Servicios Más Populares</h2>
            <h1 class="text-display-medium text-center">De offline a online en un click</h1>
        </div>
        <div class="flex flex-col lg:flex-row w-full gap-10">
            <x-service-card
                icon="bx-compass"
                title="Tu Web, Sin Complicaciones"
                subtitle="Sitios Web"
                text="Diseñamos sitios web rápidos y atractivos, ideales para negocios que quieren destacar en línea. Simple, profesional y listo para conectar con tus clientes. ¡Sin tecnicismos!"
                href="{{ route('services') }}">
            </x-service-card>
            <x-service-card
                icon="bx-store"
                title="Tienda en linea en un Click"
                subtitle="Tiendas en Linea"
                text="Vende tus productos en internet fácil y seguro. Nos encargamos de todo: catálogo, pagos y diseño. ¡Ideal para emprendedores que quieren crecer!"
                href="{{ route('services') }}">
            </x-service-card>
            <x-service-card
                icon="bx-code-block"
                title="Soluciones Web Personalizadas"
                subtitle="Diseños a la Medida"
                text="Automatiza tareas, organiza tu negocio y ahorra tiempo con herramientas personalizadas. Simple, eficiente y hecho para ti."
                href="{{ route('services') }}">
            </x-service-card>
        </div>
        <x-button.text href="{{ route('services') }}" class="text-label-large">
            <span>Ver todos los Servicios</span>
            <i class="bx bx-chevron-right"></i>
        </x-button.text>
    </div>

    <x-banner
        title="
            ¿Listo para llevar tu negocio al mundo digital?
            <br>
            Nosotros lo hacemos fácil
        "
        subtitle="Diseñado para emprendedores y negocios que quieren crecer con tecnología accesible"
    >
        <x-button href="{{ route('contact-us') }}" class="text-label-large">
            <span>Comienza Ahora</span>
            <x-bx-arrow-up-right></x-bx-arrow-up-right>
        </x-button>
    </x-banner>

    <div class="container mx-auto px-8 py-4 flex flex-col items-center justify-center gap-10">
        <div class="flex flex-col items-center gap-1">
            <h2 class="text-body-large text-foreground-secondary font-normal">Portafolio</h2>
            <h1 class="text-display-medium text-center">
                Empresas que
                <x-glow class="inline-block">Confian</x-glow>
                en nosotros
            </h1>
        </div>
        <div class="relative w-full p-6 flex flex-col md:flex-row items-start gap-6 overflow-x-auto snap-x">
            <x-projects-section type="preview"></x-projects-section>
        </div>
        <x-button href="{{ route('portfolio') }}" class="text-label-large">
            <span>Ver Más</span>
            <x-bx-arrow-up-right></x-bx-arrow-up-right>
        </x-button>
    </div>
    
    <div class="container mx-auto px-4 flex flex-col items-center justify-center gap-10">
        <div class="flex flex-col items-center gap-1">
            <h2 class="text-body-large text-foreground-secondary font-normal">Planes de Digitalización</h2>
            <h1 class="text-display-medium text-center">Soluciones Digitales a Tu Medida</h1>
        </div>
        <div class="w-full p-6 grid lg:grid-cols-3 gap-10">
            <x-plan-card
                title="Perfecta para promociones o servicios destacados"
                subtitle="Landing Page Básica"
                :items="[
                    'Dominio y Hosting incluido',
                    'Certificado SSL GRATIS',
                    'Diseño adaptable a móviles y computadoras',
                    'Integración con WhatsApp y formulario de contacto',
                    'Galería de fotos'
                ]"
                href="{{ route('contact-us') }}"
            ></x-plan-card>

            <x-plan-card
                title="Tu negocio visible 24/7 con todo lo necesario"
                subtitle="Página Web Profesional"
                :items="[
                    'Todo lo de la Landing Page',
                    'Hasta 7 secciones personalizadas',
                    '10 cuentas de correo electrónico personalizadas',
                    'Optimización básica para motores de búsqueda (SEO)',
                    'Panel de administración fácil de usar'
                ]"
                href="{{ route('contact-us') }}"
            ></x-plan-card>

            <x-plan-card
                title="Vende en internet sin complicaciones"
                subtitle="Tienda en Línea (E-Commerce)"
                :items="[
                    'Todo lo de la Página Web',
                    'Hasta 150 productos en tu catálogo',
                    'Carrito de compras y pasarelas de pago integradas',
                    'Gestión de pedidos y notificaciones automáticas',
                    'Seguridad reforzada para transacciones'
                ]"
                href="{{ route('contact-us') }}"
            ></x-plan-card>
        </div>
    </div>
    
    <div class="container mx-auto px-4 flex flex-col items-center justify-center gap-10">
        <div class="flex flex-col items-center gap-1">
            <h2 class="text-body-large text-foreground-secondary font-normal">FAQ</h2>
            <h1 class="text-display-medium text-center">Lo que todos preguntan antes de empezar</h1>
        </div>
        <x-faq-question
            :faqs="[
                [
                    'title' => '¿Qué servicios ofrece su agencia de software?',
                    'text' => 'Ofrecemos desarrollo de aplicaciones web, desarrollo de aplicaciones móviles, creación de landing pages, tiendas en línea, transformación digital y consultorías tecnológicas personalizadas.'
                ],
                [
                    'title' => '¿Cuánto tiempo toma desarrollar una aplicación?',
                    'text' => 'El tiempo depende de la complejidad del proyecto. Generalmente, las aplicaciones web y móviles básicas pueden tardar entre 4 y 12 semanas, mientras que proyectos más grandes pueden requerir más tiempo.'
                ],
                [
                    'title' => '¿Ofrecen soluciones para e-commerce?',
                    'text' => 'Sí, desarrollamos tiendas en línea con integración de pasarelas de pago, gestión de productos e inventarios, y diseño optimizado para mejorar las ventas.',
                ],
                [
                    'title' => '¿Pueden trabajar en un proyecto ya iniciado?',
                    'text' => 'Sí, podemos continuar con proyectos en marcha, evaluando el estado actual y proponiendo mejoras o desarrollando nuevas funcionalidades.',
                ],
                [
                    'title' => '¿Ofrecen consultorías?',
                    'text' => 'Sí, ofrecemos consultorías tecnológicas para ayudarte a tomar decisiones informadas sobre el desarrollo, mejora o adopción de nuevas tecnologías.',
                ],
                [
                    'title' => '¿Cómo se inicia un proyecto con ustedes?',
                    'text' => 'Puedes contactarnos para una consulta inicial, donde discutiremos tus necesidades y objetivos. A partir de ahí, te proporcionaremos una propuesta detallada.'
                ],
            ]"
        ></x-faq-question>
        <x-button.text href="{{ route('faq') }}" class="text-label-large">
            <span>¿Tienes mas preguntas?</span>
            <i class="bx bx-chevron-right"></i>
        </x-button.text>
    </div>
    
    <div class="container mx-auto px-4 flex flex-col items-center justify-center gap-10">
        <div class="flex flex-col items-center gap-1">
            <h2 class="text-body-large text-foreground-secondary font-normal">Contáctanos</h2>
            <h1 class="text-display-medium text-center">¿Listo para transformar tu negocio?</h1>
        </div>
        @include('layouts.contact-section')
    </div> 
@endsection
