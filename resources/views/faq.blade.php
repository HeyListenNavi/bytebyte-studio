@extends('layouts.app')

@section('title', 'ByteBite Studio')

@section('body')
    <x-hero>
        <div>
            <h3 class='text-body-medium md:text-body-large text-center text-foreground-secondary font-normal'>Preguntas Frecuentes</h3>
            <h1 class='text-display-medium md:text-display-large text-center from-foreground to-foreground-tertiary bg-gradient-to-r from-40% to-90% bg-clip-text text-transparent'>¿Tienes dudas? Aquí están las respuestas</h1>
        </div>
    </x-hero>
    
    <div class='container mx-auto px-4 flex flex-col items-center justify-center gap-10'>
        <div class='flex flex-col items-center gap-1'>
            <h2 class='text-body-large text-foreground-secondary font-normal'>FAQ</h2>
            <h1 class='text-display-medium text-center'>Lo que todos preguntan antes de empezar</h1>
        </div>
        <x-faq-question
            :faqs="[
                [
                    'title' => '¿Qué servicios ofrece su agencia de software?',
                    'text' => 'Ofrecemos desarrollo de aplicaciones web, desarrollo de aplicaciones móviles, creación de landing pages, tiendas en línea, transformación digital y consultorías tecnológicas personalizadas.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Cuánto tiempo toma desarrollar una aplicación?',
                    'text' => 'El tiempo depende de la complejidad del proyecto. Generalmente, las aplicaciones web y móviles básicas pueden tardar entre 4 y 12 semanas, mientras que proyectos más grandes pueden requerir más tiempo.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Cómo se define el precio de un proyecto?',
                    'text' => 'El costo se basa en la complejidad, los requisitos específicos y el tiempo necesario para completarlo. Ofrecemos presupuestos personalizados tras una consulta inicial gratuita.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Puedo hacer modificaciones a la aplicación después de lanzarla?',
                    'text' => '¡Por supuesto! Ofrecemos servicios de mantenimiento y soporte para implementar actualizaciones, mejoras o nuevas funcionalidades después del lanzamiento.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Ofrecen soluciones para e-commerce?',
                    'text' => 'Sí, desarrollamos tiendas en línea con integración de pasarelas de pago, gestión de productos e inventarios, y diseño optimizado para mejorar las ventas.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Realizan proyectos de transformación digital?',
                    'text' => 'Sí, ayudamos a empresas a modernizar sus procesos, adoptando tecnologías que mejoren la eficiencia, reduzcan costos y aumenten la productividad.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Pueden trabajar en un proyecto ya iniciado?',
                    'text' => 'Sí, podemos continuar con proyectos en marcha, evaluando el estado actual y procediendo con mejoras o desarrollando nuevas funcionalidades.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Qué tan involucrado estaré en el proceso de desarrollo?',
                    'text' => 'Mantenemos una comunicación constante y transparente durante todo el proceso. Estarás involucrado en cada etapa clave, desde la planificación hasta la entrega final.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Ofrecen consultorías?',
                    'text' => 'Sí, ofrecemos consultorías tecnológicas para ayudarte a tomar decisiones informadas sobre el desarrollo, mejora o adopción de nuevas tecnologías.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Cómo se inicia un proyecto con ustedes?',
                    'text' => 'Puedes contactarnos para una consulta inicial, donde discutiremos tus necesidades y objetivos. A partir de ahí, te proporcionaremos una propuesta detallada.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Qué diferencia hay entre una landing page y un sitio web completo?',
                    'text' => 'Una landing page es una sola página enfocada en conversiones (como captar leads o promocionar un producto), mientras que un sitio web tiene múltiples secciones (Inicio, Servicios, Contacto, etc.) para mostrar toda tu empresa.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => '¿Qué necesito para empezar mi proyecto?',
                    'text' => 'Lo más importante es proporcionar: textos e imágenes de tu negocio, información de productos/servicios y ejemplos de sitios que te gusten. Nosotros nos encargamos del resto.',
                    'icon' => 'bx-cuboid'
                ]
            ]"
        ></x-faq-question>
        <div class="flex flex-col gap-2 p-4 w-full">
            <div class='text-body-large flex justify-between gap-2'>
                <div class="flex items-center gap-1">
                    <i class="bx bx-cuboid"></i>
                    <h1>¿Tienes alguna otra duda?</h1>
                </div>
            </div>
            <p class='text-body-medium text-foreground-secondary'>
                Contáctanos y te responderemos en cuanto antes
            </p>
        </div>
        @include('layouts.contact-form')
    </div>
@endsection
