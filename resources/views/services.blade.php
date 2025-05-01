@extends("layouts.app")

@section("title", "Servicios")

@section("body")
    <x-hero>
        <div class="flex flex-col lg:flex-row gap-4 items-center">
            <i class="group relative bx bx-bulb !text-[120px] -z-10">
                <i class="group-hover:opacity-100 duration-700 opacity-0 transition-opacity absolute top-0 left-0 bx bx-bulb !text-[120px] text-highlight blur-xs -z-20"></i>
                <i class="group-hover:opacity-100 duration-700 opacity-0 transition-opacity absolute top-0 left-0 bx bx-bulb !text-[120px] text-highlight blur-xs -z-20"></i>
                <i class="group-hover:opacity-100 duration-700 opacity-0 transition-opacity absolute top-0 left-0 bx bx-bulb !text-[120px] text-highlight blur-lg -z-20"></i>
                <i class="group-hover:opacity-100 duration-700 opacity-0 transition-opacity absolute top-0 left-0 bx bx-bulb !text-[120px] text-highlight blur-xl -z-20"></i>
            </i>
            <div>
                <h1 class="text-display-medium md:text-display-large text-center md:text-start from-foreground to-foreground-tertiary bg-gradient-to-r from-40% to-90% bg-clip-text text-transparent">Servicios</h1>
                <h3 class="text-body-medium md:text-body-large text-center md:text-start text-foreground-secondary font-normal">¡Conectamos tu negocio a la tecnología!</h3>
            </div>
        </div>
    </x-hero>

    <div class="container mx-auto px-4 flex flex-col items-center justify-center gap-10">
        <div class="flex flex-col items-center gap-1">
            <h2 class="text-body-large text-foreground-secondary font-normal text-center">Nuestros Servicios Digitales</h2>
            <h1 class="text-display-medium text-center">Conectamos tu negocio con la tecnología perfecta</h1>
        </div>
        <div class="divide-y divide-secondary/20">
            <div class="py-10 flex flex-col lg:flex-row gap-8 items-center">
                <i class="bx bx-gift !text-[160px]"></i>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-1">
                        <h1 class="text-headline-large">Todos incluyen de forma gratuita</h1>
                    </div>
                    <ul class="flex flex-col gap-1 list-disc ml-6 text-body-small text-foreground-secondary">
                        <li>1 mes de soporte</li>
                        <li>Certificado SSL</li>
                        <li>Hosting por 1 año</li>
                        <li>Capacitación inicial</li>
                    </ul>
                </div>
            </div>

            <x-service
                title="Tu mejor carta de presentación digital"
                subtitle="Landing Page"
                icon="bx-sidebar"
                text="Diseñamos landing pages profesionales que capturan la esencia de tu marca y convierten visitantes en clientes. Con diseño adaptable, integraciones clave y carga ultrarrápida, tu mensaje llegará claro y efectivo."
                :items="[
                    'Dominio + Hosting incluido (1 año)',
                    'Certificado SSL GRATIS',
                    'Diseño responsive (adaptable a dispositivos)',
                    'Integración con WhatsApp y formulario de contacto',
                    'SEO básico incluido'
                ]"
                href="#"
            ></x-service>

            <x-service
                title="Presencia digital completa"
                subtitle="Sitio Web"
                icon="bx-window-alt"
                text="Creamos sitios web completos que reflejan tu profesionalismo y te ayudan a conectar con tu audiencia. Perfecto para mostrar tus servicios, compartir tu historia y generar confianza."
                :items="[
                    'Hasta 7 secciones personalizadas',
                    '10 correos profesionales con tu dominio',
                    'Optimización básica para Google (SEO)',
                    'Panel de administración fácil de usar',
                    'Hosting profesional incluido'
                ]"
                href='#'
            ></x-service>

            <x-service
                title="Convierte visitantes en clientes"
                subtitle="Tienda en Línea"
                icon="bx-shopping-bag"
                text="Desarrollamos tiendas online listas para vender desde el primer día, con todas las herramientas que necesitas para gestionar pedidos, inventario y pagos de forma sencilla."
                :items="[
                    'Hasta 150 productos en catálogo',
                    'Pasarelas de pago integradas (MercadoPago, Stripe)',
                    'Gestión de inventario automática',
                    'Sistema de seguimiento de pedidos',
                    'Seguridad SSL premium'
                ]"
                href='#'
            ></x-service>

            <x-service
                title="Lleva tu marca a cualquier parte"
                subtitle="Aplicación Móvil"
                icon="bx-mobile-alt"
                text="Desarrollamos apps nativas que mantienen a tus clientes conectados con tu negocio, con funciones personalizadas para fidelizar y mejorar su experiencia."
                :items="[
                    'Versiones para iOS y Android',
                    'Notificaciones push',
                    'Panel de administración web',
                    'Sincronización en tiempo real',
                    'Integración con tu base de datos'
                ]"
                href='#'
            ></x-service>

            <x-service
                title="Tu mejor empleado virtual"
                subtitle="Chatbot Inteligente"
                icon="bx-at"
                text="Implementamos asistentes automáticos que atienden a tus clientes 24/7, resuelven dudas frecuentes y optimizan tus procesos de venta sin necesidad de intervención humana."
                :items="[
                    'Integración con WhatsApp Business',
                    'Agenda citas automáticamente',
                    'Base de conocimiento personalizable',
                    'Panel de gestión de conversaciones',
                    'Reportes de desempeño'
                ]"
                href="#"
            ></x-service>

            <x-service
                title="Tecnología que se adapta a ti"
                subtitle="Software a la Medida"
                icon="bx-code-alt"
                text="Creamos sistemas a medida que automatizan tus procesos clave, eliminando tareas repetitivas y dándote el control total de tu operación."
                :items="[
                    'Control de inventario inteligente',
                    'Gestión de citas automatizada',
                    'Facturación electrónica',
                    'Reportes personalizados',
                    'Acceso multi-usuario'
                ]"
                href="#"
            ></x-service>

            <x-service
                title="Tu brújula en el mundo digital"
                subtitle="Consultoría Digital"
                icon="bx-search-alt"
                text="Te ayudamos a navegar por las mejores opciones tecnológicas con un plan estratégico diseñado específicamente para las necesidades de tu negocio."
                :items="[
                    'Diagnóstico completo de tu negocio',
                    'Recomendaciones personalizadas',
                    'Plan de implementación paso a paso',
                    'Comparativa de herramientas',
                    '3 meses de acompañamiento'
                ]"
                href="#"
            ></x-service>
        </div>
    </div>

    <x-banner
        title="
            ¿Listo para llevar tu negocio al mundo digital?
            <br>
            Nosotros lo hacemos fácil
        "
        subtitle="Diseñado para emprendedores y negocios que quieren crecer con tecnología accesible"
    >
        <div class="flex flex-col md:flex-row gap-4">
            <x-button.outline class="text-label-large">
                <span>Ver Portafolio</span>
            </x-button.outline>
            <x-button class="text-label-large">
                <span>Cotizar Servicio</span>
                <x-bx-arrow-up-right></x-bx-arrow-up-right>
            </x-button>
        </div>
    </x-banner>
@endsection
