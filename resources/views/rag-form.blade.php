@extends('layouts.app')

@section('title', 'Contactanos')

@section('body')
<x-hero>
    <div class="bg-glass container col-span-2 mx-auto flex max-w-6xl flex-col items-center justify-center gap-10 rounded-2xl my-8 px-4 py-8 shadow-2xl backdrop-blur-lg lg:px-24">
        <div class="flex flex-col items-center gap-1">
            <h2 class="text-body-medium md:text-body-large text-foreground-secondary font-normal">Formulario para la Creación de un Bot de IA</h2>
            <h1 class="text-headline-large md:text-display-medium text-center">¡Impulsa tu Negocio con un Bot de IA Personalizado!</h1>
        </div>
        <div class="bg-radial-[at_50%_0] from-secondary to-background/10 w-full rounded-2xl to-90% px-[1px] pt-[1px]">
            <script>
                function onSubmit(token) {
                    document.getElementById("contact-form").submit();
                }
            </script>

            <form action="{{ route('contact.submit') }}" id="contact-form" method="POST" class="bg-background flex flex-col gap-6 rounded-2xl px-4 py-6">
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

                <!-- Sección de Información General de la Empresa -->
                <fieldset class="grid gap-6 xl:grid-cols-2">
                    <x-form-input
                        label="Nombre de tu Empresa/Negocio"
                        id="companyName"
                        name="companyName"
                        placeholder="El Nombre de tu Empresa/Negocio"
                        :required="true"
                        value="{{ old('companyName') }}"
                    ></x-form-input>

                    <x-form-input
                        label="Giro o Industria de tu Negocio"
                        id="companyType"
                        name="companyType"
                        placeholder="Ej. E-commerce de moda, consultoría tecnológica, restaurante"
                        value="{{ old('companyType') }}"
                    ></x-form-input>
                </fieldset>

                <!-- Sección de Información Detallada para RAG (usando textareas) -->
                <fieldset class="grid gap-6">
                    <x-form-input
                        label="¿Quiénes somos? (Misión, Visión, Historia)"
                        id="whoWeAre"
                        name="whoWeAre"
                        placeholder="Cuéntanos sobre la identidad de tu empresa, su historia, valores, misión y visión. ¿Qué te hace único? Esta información define la personalidad y el contexto del bot."
                        :required="true"
                        type="textarea"
                        style="white-space: pre-line"
                    >{{ old('whoWeAre') }}</x-form-input>

                    <x-form-input
                        label="¿Qué hacemos? (Productos y Servicios)"
                        id="whatWeDo"
                        name="whatWeDo"
                        placeholder="Describe en detalle todos tus productos y servicios. Incluye características, beneficios, precios, políticas de garantía y cualquier detalle relevante que un cliente potencial pueda preguntar. Sé muy específico."
                        :required="true"
                        type="textarea"
                        style="white-space: pre-line"
                    >{{ old('whatWeDo') }}</x-form-input>

                    <!-- Nueva pregunta: Cultura y Tono de la Marca -->
                    <x-form-input
                        label="Cultura y Tono de la Marca"
                        id="brandTone"
                        name="brandTone"
                        placeholder="Describe la voz de tu marca. ¿Es formal, amigable, divertida, profesional? ¿Hay frases o palabras clave que deba usar o evitar? Por ejemplo: 'Siempre usamos un tono positivo y empático.'"
                        :required="true"
                        type="textarea"
                        style="white-space: pre-line"
                    >{{ old('brandTone') }}</x-form-input>

                    <!-- Nueva pregunta: Clientes y Público Objetivo -->
                    <x-form-input
                        label="Clientes y Público Objetivo"
                        id="targetAudience"
                        name="targetAudience"
                        placeholder="Describe a tus clientes ideales. ¿Quiénes son? ¿Qué edad tienen? ¿Cuáles son sus principales problemas o necesidades? Esto ayudará al bot a personalizar sus respuestas."
                        :required="true"
                        type="textarea"
                        style="white-space: pre-line"
                    >{{ old('targetAudience') }}</x-form-input>
                    
                    <x-form-input
                        label="¿Qué no hacemos? (Límites y Exclusiones)"
                        id="whatWeDontDo"
                        name="whatWeDontDo"
                        placeholder="Es crucial definir qué no ofrecemos. Esto ayuda a establecer límites claros para el bot y evita que dé información incorrecta. Ejemplos: 'No realizamos envíos internacionales', 'No ofrecemos devoluciones en productos personalizados', 'No damos asesoría legal'."
                        :required="true"
                        type="textarea"
                        style="white-space: pre-line"
                    >{{ old('whatWeDontDo') }}</x-form-input>

                    <x-form-input
                        label="Información de Contacto y Horarios"
                        id="contactInfo"
                        name="contactInfo"
                        placeholder="Proporciona detalles como correos de soporte, números de teléfono, direcciones físicas, y horarios de atención. Esta información es fundamental para redirigir a los clientes cuando sea necesario."
                        type="textarea"
                        style="white-space: pre-line"
                    >{{ old('contactInfo') }}</x-form-input>
                    
                    <!-- Nueva pregunta: Políticas de la Empresa -->
                    <x-form-input
                        label="Políticas de la Empresa (Devoluciones, Envíos, Garantías)"
                        id="companyPolicies"
                        name="companyPolicies"
                        placeholder="Detalla de manera clara y concisa todas las políticas importantes para el cliente, como el proceso de devolución, los costos y tiempos de envío, y las condiciones de garantía."
                        type="textarea"
                        style="white-space: pre-line"
                    >{{ old('companyPolicies') }}</x-form-input>

                    <x-form-input
                        label="Preguntas Frecuentes y Respuestas (FAQs)"
                        id="faqs"
                        name="faqs"
                        placeholder="Enumera las preguntas más comunes que tus clientes hacen y proporciona las respuestas oficiales. Esto actuará como un conjunto de datos inicial de alta prioridad para el bot."
                        type="textarea"
                        style="white-space: pre-line"
                    >{{ old('faqs') }}</x-form-input>

                </fieldset>
                
                <!-- Sección de Contacto Adicional -->
                <fieldset class="grid gap-6 xl:grid-cols-2">
                    <x-form-input
                        label="Correo Electrónico de Contacto"
                        id="email"
                        name="email"
                        type="email"
                        placeholder="tucorreo@ejemplo.com"
                        value="{{ old('email') }}"
                    ></x-form-input>

                    <x-form-input
                        label="Teléfono de Contacto"
                        id="phone"
                        name="phone"
                        type="tel"
                        placeholder="+12 (345) 678 9101"
                        value="{{ old('phone') }}"
                    ></x-form-input>
                </fieldset>

                <!-- Botón de Envío -->
                <x-button class="text-label-large self-end"
                    data-sitekey="{{ config('services.recaptcha.site_key') }}"
                    data-callback="onSubmit"
                    data-action="register"
                    type="submit">
                    <span>Enviar Información</span>
                    <x-bx-arrow-up-right></x-bx-arrow-up-right>
                </x-button>
            </form>
        </div>

    </div>
</x-hero>
@endsection