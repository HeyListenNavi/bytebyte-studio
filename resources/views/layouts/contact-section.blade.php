<div class="grid w-full gap-20 md:grid-cols-2">
    @include('layouts.contact-form')

    <div class="divide-secondary/20 divide-y">
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Chat por WhatsApp</h3>
                <p class="text-body-small text-foreground-secondary">¿Necesitas asesoría rápida? Nuestro equipo está
                    listo para ayudarte. Da click en el botón:</p>
            </div>
            <a href="https://api.whatsapp.com/send?phone=5216642677530&text=Hola!%20Me%20gustaria%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios" target="_blank"
                class="bg-whatsapp hover:bg-whatsapp/80 flex items-center gap-2 self-start rounded-full px-6 py-2 transition-colors">
                <i class="bx bxl-whatsapp bx-lg"></i>
                <span class="text-label-small flex flex-col">
                    Escribenos en
                    <span class="text-body-small font-bold">WhatsApp</span>
                </span>
            </a>
        </div>
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Soporte por Email</h3>
                <p class="text-body-small text-foreground-secondary">Envíanos tus dudas y te responderemos lo antes
                    posible, nuestro correo es:</p>
            </div>
            <x-button.text href="mailto:contacto@ByteBytestudio.com?subject=Consulta%20sobre%20servicios&body=Hola%2C%20me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20sus%20servicios.%20Gracias!" target="_blank"
                class="text-body-medium font-bold text-highlight underline">contacto@ByteBytestudio.com</x-button.text>
        </div>
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Llamada Directa</h3>
                <p class="text-body-small text-foreground-secondary">¿Prefieres hablar por teléfono? Llámanos al
                    siguiente número:</p>
            </div>
            <x-button.text href="tel:+526642677530" target="_blank" class="text-body-medium font-bold text-highlight underline">+52 (664) 267
                7530</x-button.text>
        </div>
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Nuestras Redes</h3>
                <p class="text-body-small text-foreground-secondary">Encuéntranos en Instagram, Facebook, y TikTok
                    como:</p>
            </div>
            <x-button.text href="https://www.instagram.com/ByteBytestudio" target="_blank"
                class="text-body-medium font-bold text-highlight underline">@ByteBytestudio</x-button.text>
        </div>
    </div>
</div>
