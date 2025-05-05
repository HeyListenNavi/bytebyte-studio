@extends('layouts.app')

@section('title', 'Sent Correctly')

@section('body')
    <x-hero>
        <div
            class="bg-glass container col-span-2 mx-auto flex max-w-6xl flex-col items-center justify-center gap-10 rounded-2xl px-8 py-12 shadow-2xl backdrop-blur-lg lg:px-24">
            <i class="bx bx-check-circle !text-[120px] md:!text-[240px]"></i>
            <div class="flex flex-col items-center gap-1">
                <h1 class="text-headline-large md:text-display-medium text-center">¡Mensaje enviado correctamente!</h1>
                <h2 class="text-body-medium md:text-body-large text-foreground-secondary font-normal text-center">Nos pondremos en contacto en cuanto antes
                </h2>
            </div>
        </div>
    </x-hero>
@endsection
