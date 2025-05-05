@extends('layouts.app')

@section('title', 'Contactanos')

@section('body')
    <x-hero>
        <div
            class="bg-glass container col-span-2 mx-auto flex max-w-6xl flex-col items-center justify-center gap-10 rounded-2xl px-8 py-8 shadow-2xl backdrop-blur-lg lg:px-24">
            <div class="flex flex-col items-center gap-1">
                <h2 class="text-body-medium md:text-body-large text-foreground-secondary font-normal">Contáctanos</h2>
                <h1 class="text-headline-large md:text-display-medium text-center">¿Listo para transformar tu negocio?</h1>
            </div>
            @include('layouts.contact-form')
        </div>
    </x-hero>
@endsection
