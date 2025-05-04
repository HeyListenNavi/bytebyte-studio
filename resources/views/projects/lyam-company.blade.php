@extends('layouts.project', ['href' => 'https://lyamcompany.com/'])

@section('title', 'Lyam Company')

@section('subtitle', 'Atención médica que empieza desde tu navegador')

@section('project', 'https://lyamcompany.com')

@section('thumbnail', Vite::mockup('lyam-thumbnail.png'))
@section('mockup-one', Vite::mockup('lyam-1.png'))
@section('mockup-two', Vite::mockup('lyam-2.png'))

@section('company-description')
<p> Lyam Company es el consultorio de un médico general comprometido con ofrecer una atención cercana, clara y profesional. Aunque su trato con los pacientes siempre ha sido cálido y directo, su presencia en línea era muy limitada, lo que hacía difícil que nuevos pacientes lo encontraran, supieran lo que ofrecía o pudieran comunicarse con él de forma sencilla.</p>
@endsection

@section('project-description')
<p> Desde ByteBite Studio diseñamos un sitio web completo que presenta de forma clara sus servicios médicos, ubicación, horarios de atención y medios de contacto. También incluimos formularios para que los pacientes puedan escribirle directamente desde la página y resolver sus dudas sin tener que llamar. El sitio es ligero, rápido y fácil de usar desde cualquier dispositivo, pensado especialmente para personas que no están tan familiarizadas con la tecnología. Con esta herramienta, Lyam Company logró estar más cerca de quienes necesitan atención médica de confianza, incluso antes de entrar al consultorio.</p>
@endsection