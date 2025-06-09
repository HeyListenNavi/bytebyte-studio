<div class="bg-radial-[at_50%_0] from-secondary to-background/10 w-full rounded-2xl to-90% px-[1px] pt-[1px]">
    <form action="{{ route('contact.submit') }}" method="POST" class="bg-background flex flex-col gap-6 rounded-2xl px-4 py-6">
        @csrf

        @if ($errors->any())
            <div class="text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <fieldset class="grid gap-6 xl:grid-cols-2">
            <x-form-input label="Nombre" id="name" placeholder="Tu nombre" :required="true"></x-form-input>
            <x-form-input label="Apellido" id="lastName" placeholder="Tu apellido" :required="true"></x-form-input>
        </fieldset>

        <x-form-input label="Nombre de la Empresa" id="company" placeholder="Nombre de la Empresa"
            :required="true"></x-form-input>

        <x-form-input label="Correo" id="email" placeholder="tucorreo@ejemplo.com"></x-form-input>

        <x-form-input label="Teléfono" id="phone" placeholder="+12 (345) 678 9101" :required="true"></x-form-input>

        <x-form-input label="¿Cómo podemos ayudarte?" id="contactMessage" placeholder="Cuéntanos como podemos ayudarte" :required="true" type="textarea"></x-form-input>

        <fieldset class="flex flex-col gap-4">
            <legend class="text-body-small mb-2">
                ¿Qué servicios te interesan?
                <span class="text-red-500">*</span>
            </legend>

            <fieldset class="grid gap-4 lg:grid-cols-2">
                <x-form-input label="Landing Page" id="landingPage" name="services[]" type="checkbox" :required="true"></x-form-input>

                <x-form-input label="Tienda en Línea" id="ecommerce" name="services[]" type="checkbox"></x-form-input>

                <x-form-input label="App" id="app" name="services[]" type="checkbox"></x-form-input>

                <x-form-input label="Consultoría" id="consulting" name="services[]" type="checkbox"></x-form-input>

                <x-form-input label="Sitio Web" id="website" name="services[]" type="checkbox"></x-form-input>

                <x-form-input label="Chatbot" id="chatbot" name="services[]" type="checkbox"></x-form-input>

                <x-form-input label="Software a la medida" id="customSoftware" name="services[]"
                    type="checkbox"></x-form-input>

                <x-form-input label="Otro" id="other" name="services[]" type="checkbox"></x-form-input>
            </fieldset>
        </fieldset>

        <x-button class="text-label-large self-end" type="submit">
            <span>Contactanos</span>
            <x-bx-arrow-up-right></x-bx-arrow-up-right>
        </x-button>
    </form>
</div>
