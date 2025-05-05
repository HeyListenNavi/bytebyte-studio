<div class="grid w-full gap-20 md:grid-cols-2">
    @include('layouts.contact-form')

    <div class="divide-secondary/20 divide-y">
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Chat por WhatsApp</h3>
                <p class="text-body-small text-foreground-secondary">¿Necesitas asesoría rápida? Nuestro equipo está
                    listo para ayudarte. Da click en el botón:</p>
            </div>
            <a href=""
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
            <x-button.text href=""
                class="text-body-medium font-bold text-highlight underline">contacto@bytebitestudio.com</x-button.text>
        </div>
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Llamada Directa</h3>
                <p class="text-body-medium text-foreground-secondary">¿Prefieres hablar por teléfono? Llámanos al
                    siguiente número:</p>
            </div>
            <x-button.text href="" class="text-body-medium font-bold text-highlight underline">+52 (664) 267
                7530</x-button.text>
        </div>
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Nuestras Redes</h3>
                <p class="text-body-small text-foreground-secondary">Encuéntranos en Instagram, Facebook, y TikTok
                    como:</p>
            </div>
            <x-button.text href=""
                class="text-body-medium font-bold text-highlight underline">@bytebitestudio</x-button.text>
        </div>
    </div>
</div>
