<div class="grid w-full gap-20 md:grid-cols-2">
    <div class="bg-radial-[at_50%_0] from-secondary to-background/10 rounded-2xl to-90% px-[1px] pt-[1px]">
        <form class="bg-background flex flex-col gap-6 rounded-2xl px-4 py-6">
            <fieldset class="grid lg:grid-cols-2 gap-6">
                <x-form-input label='Nombre' id='name' placeholder='Tu nombre' :required="true"></x-form-input>
                <x-form-input label='Apellido' id='lastName' placeholder='Tu apellido' :required="true"></x-form-input>
            </fieldset>

            <x-form-input label='Nombre de la Empresa' id='company' placeholder='Nombre de la Empresa'
                :required="true"></x-form-input>

            <x-form-input label='Correo' id='email' placeholder='tucorreo@ejemplo.com'></x-form-input>

            <x-form-input label='Teléfono' id='email' placeholder='+12 (345) 678 9101'
                :required="true"></x-form-input>

            <x-form-input label='¿Cómo podemos ayudarte?' id='message' placeholder='Cuéntanos como podemos ayudarte'
                type="textarea"></x-form-input>

            <fieldset class="flex flex-col gap-4">
                <legend class="text-body-medium mb-2">¿Qué servicios te interesan?</legend>

                <fieldset class="grid lg:grid-cols-2 gap-4">
                    <x-form-input label='Landing Page' id='landingPage' name='service' type="checkbox"></x-form-input>

                    <x-form-input label='Tienda en Línea' id='ecommerce' name='service' type="checkbox"></x-form-input>

                    <x-form-input label='App' id='app' name='service' type="checkbox"></x-form-input>

                    <x-form-input label='Consultoría' id='consulting' name='service' type="checkbox"></x-form-input>

                    <x-form-input label='Sitio Web' id='website' name='service' type="checkbox"></x-form-input>

                    <x-form-input label='Chatbot' id='chatbot' name='service' type="checkbox"></x-form-input>

                    <x-form-input label='Software a la medida' id='customSoftware' name='service'
                        type="checkbox"></x-form-input>

                    <x-form-input label='Otro' id='other' name='service' type="checkbox"></x-form-input>
                </fieldset>
            </fieldset>

            <x-button class="text-label-large self-end" type="submit">
                <span>Contactanos</span>
                <x-bx-arrow-up-right></x-bx-arrow-up-right>
            </x-button>
        </form>
    </div>

    <div class="divide-secondary/20 divide-y">
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Chat por WhatsApp</h3>
                <p class="text-body-medium text-foreground-secondary">¿Necesitas asesoría rápida? Nuestro equipo está
                    listo para ayudarte. Da click en el botón:</p>
            </div>
            <a href=""
                class="bg-whatsapp hover:bg-whatsapp/80 flex items-center gap-2 self-start rounded-full px-8 py-3 transition-colors">
                <i class="bx bxl-whatsapp bx-lg"></i>
                <span class="text-label-medium flex flex-col">
                    Escribenos en
                    <span class="text-label-large font-bold">WhatsApp</span>
                </span>
            </a>
        </div>
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Soporte por Email</h3>
                <p class="text-body-medium text-foreground-secondary">Envíanos tus dudas y te responderemos lo antes
                    posible, nuestro correo es:</p>
            </div>
            <x-button.text href=""
                class="text-label-large text-highlight underline">contacto@bytebitestudio.com</x-button.text>
        </div>
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Llamada Directa</h3>
                <p class="text-body-medium text-foreground-secondary">¿Prefieres hablar por teléfono? Llámanos al
                    siguiente número:</p>
            </div>
            <x-button.text href="" class="text-label-large text-highlight underline">+52 (664) 267
                7530</x-button.text>
        </div>
        <div class="flex flex-col gap-6 py-10">
            <div class="flex flex-col gap-1">
                <h3 class="text-label-large">Nuestras Redes</h3>
                <p class="text-body-medium text-foreground-secondary">Encuéntranos en Instagram, Facebook, y TikTok
                    como:</p>
            </div>
            <x-button.text href=""
                class="text-label-large text-highlight underline">@bytebitestudio</x-button.text>
        </div>
    </div>
</div>
