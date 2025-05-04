@extends('layouts.app')

@section('title', 'ByteBite Studio')

@section('body')
    <x-hero>
        <div>
            <h1 class="text-display-medium md:text-display-large text-center from-foreground to-foreground-tertiary bg-gradient-to-r from-40% to-90% bg-clip-text text-transparent">Políticas de Servicio</h1>
            <h3 class="text-body-medium md:text-body-large text-center text-foreground-secondary font-normal">Con estas políticas, protegemos tanto tu negocio como el nuestro, asegurando profesionalismo y claridad en cada proyecto</h3>
        </div>
    </x-hero>
    
    <div class="container mx-auto px-4 flex flex-col items-center justify-center gap-10">
        <x-faq-question
            :faqs="[
                [
                    'title' => 'Cambios de Diseño',
                    'text' => 'Una vez aprobado el diseño final, cualquier modificación estética o estructural tendrá un costo adicional basado en la complejidad del cambio.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Alcance del Proyecto',
                    'text' => 'El contrato incluirá una lista detallada de funcionalidades acordadas. Cualquier función adicional solicitada después de la firma será cotizada por separado.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Dominio y Hosting',
                    'text' => 'Los costos de registro/renovación de dominio no están incluidos en los paquetes básicos (solo incluye hosting el primer año). Ofrecemos gestión de dominios como servicio adicional.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Entrega de Recursos',
                    'text' => 'Se proporcionará un calendario con fechas límite para entrega de material gráfico (logos, fotos) y contenido textual. Recursos no entregados a tiempo no serán incluidos en la primera entrega.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Aprobaciones y Feedback',
                    'text' => 'El cliente dispondrá de 36 horas hábiles para dar veredicto sobre diseños presentados. Si no se recibe respuesta en ese plazo, se considerará aprobado automáticamente.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Fechas de Revisión',
                    'text' => 'Las revisiones programadas no se reprogramarán por falta de feedback. El silencio del cliente se interpretará como conformidad con lo mostrado.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Uso del Producto',
                    'text' => 'No cubrimos problemas derivados de: modificaciones no autorizadas por el cliente, uso inadecuado de los sistemas o falta de mantenimiento básico.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Plazos de Entrega',
                    'text' => 'Los tiempos estimados dependen del cumplimiento del cliente con las etapas. Retrasos en aprobaciones o recursos afectarán la fecha final de entrega.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Propiedad Intelectual',
                    'text' => 'Los derechos de autor del diseño y código fuente serán transferidos al cliente solo después del pago completo.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Cancelaciones y Reembolsos',
                    'text' => 'Si el cliente cancela el proyecto: Antes del inicio (80% de reembolso), durante desarrollo (se cobra % completado + 20% administrativo), post-aprobación (no hay reembolsos).',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Mantenimiento No Incluido',
                    'text' => 'Corrección de errores post-entrega causados por actualizaciones de terceros o modificaciones no autorizadas. Se ofrecerá como servicio adicional con costo.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Requisitos Técnicos',
                    'text' => 'El cliente debe proporcionar: acceso a redes sociales/plataformas vinculadas, credenciales de hosting/dominio (si aplica) y materiales en formatos adecuados.',
                    'icon' => 'bx-cuboid'
                ],
                [
                    'title' => 'Política de Privacidad',
                    'text' => 'Los datos del cliente (y sus usuarios) no serán compartidos con terceros. Proyectos con datos sensibles incluirán cláusula de confidencialidad adicional.',
                    'icon' => 'bx-cuboid'
                ]
            ]"
        ></x-faq-question>
        <div class="flex flex-col gap-2 p-4 w-full">
            <div class="text-body-large flex justify-between gap-2">
                <div class="flex items-center gap-1">
                    <i class="bx bx-cuboid"></i>
                    <h1>¿Tienes alguna otra duda?</h1>
                </div>
            </div>
            <p class="text-body-medium text-foreground-secondary">
                Contáctanos y te responderemos en cuanto antes
            </p>
        </div>
        @include('layouts.contact-form')
    </div>
@endsection
