@extends('layouts.app')

@section('title', 'Contactanos')

@section('body')
<x-hero>
    <div class="bg-glass container col-span-2 mx-auto flex max-w-6xl flex-col items-center justify-center gap-10 rounded-2xl my-8 px-4 py-8 shadow-2xl backdrop-blur-lg lg:px-24">
        <div class="flex flex-col items-center gap-1">
            <h2 class="text-body-medium md:text-body-large text-foreground-secondary font-normal">Elige el Horario de Atención</h2>
            <h1 class="text-headline-large md:text-display-medium text-center">¡Agenda tu espacio con ByteBite Studio!</h1>
        </div>
        <div class="bg-radial-[at_50%_0] from-secondary to-background/10 w-full rounded-2xl to-90% px-[1px] pt-[1px]">
            <script>
                function onSubmit(token) {
                    document.getElementById("contact-form").submit();
                }
            </script>

            <form id="contact-form" method="POST" class="bg-background flex flex-col gap-6 rounded-2xl px-4 py-6">
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
                    <x-form-input
                        label="Nombre"
                        id="name"
                        placeholder="Tu nombre"
                        :required="true"
                        value="{{ old('name') }}"
                    ></x-form-input>

                    <x-form-input
                        label="Apellido"
                        id="lastName"
                        placeholder="Tu apellido"
                        :required="true"
                        value="{{ old('lastName') }}"
                    ></x-form-input>
                </fieldset>

                <x-form-input
                    label="Correo"
                    id="email"
                    placeholder="tucorreo@ejemplo.com"
                    value="{{ old('email') }}"
                ></x-form-input>

                <x-form-input
                    label="Teléfono"
                    id="phone"
                    placeholder="+12 (345) 678 9101"
                    :required="true"
                    value="{{ old('phone') }}"
                ></x-form-input> 

                <x-form-input
                    label="Horario"
                    id="date"
                    :required="true"
                    type="date"
                    value="{{ old('date') }}"
                ></x-form-input>

                <x-form-input
                    label="Hora"
                    id="time"
                    :required="true"
                    type="time"
                    min="09:00"
                    max="18:00"
                    value="{{ old('time') }}"
                ></x-form-input>

                <x-button class="text-label-large self-end"
                    data-sitekey="{{ config('services.recaptcha.site_key') }}"
                    data-callback="onSubmit"
                    data-action="register"
                    type="submit">
                    <span>Agendar Horario</span>
                    <x-bx-arrow-up-right></x-bx-arrow-up-right>
                </x-button>
            </form>
        </div>

    </div>
</x-hero>
@endsection