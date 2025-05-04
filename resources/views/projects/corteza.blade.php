@extends('layouts.project', ['href' => 'https://cortezamex.com/'])

@section('title', 'Corteza')

@section('subtitle', 'Una forma nueva de vivir, más libre, más conectada con la naturaleza, y diseñada por ti')

@section('project', 'https://cortezamex.com')

@section('thumbnail', Vite::mockup('corteza-thumbnail.png'))
@section('mockup-one', Vite::mockup('corteza-1.png'))
@section('mockup-two', Vite::mockup('corteza-2.png'))

@section('company-description')
<p>Corteza es una empresa que construye tiny houses: casas pequeñas, pero completamente funcionales, pensadas para personas que buscan una vida más simple, consciente y cercana a la tierra. Su propuesta combina sostenibilidad con diseño personalizado, pero tenían un problema: muchos clientes interesados no sabían por dónde empezar ni cómo visualizar lo que querían. Corteza necesitaba una forma clara y atractiva de explicar su oferta y permitir que cada persona imaginara su hogar ideal.</p>
@endsection

@section('project-description')
<p>Desde ByteBite Studio diseñamos una página web con un estilo cálido, acogedor y natural, usando colores tierra y formas orgánicas que evocan raíces, tranquilidad y hogar. Incluimos un cotizador interactivo donde cada visitante puede elegir el modelo de tiny house que le interesa, agregar extras como paneles solares o muebles integrados, y ver cómo cambia el precio en tiempo real. También añadimos una sección de contacto y un botón para enviar su cotización fácilmente. Con esta herramienta, Corteza no solo muestra lo que hace: invita a imaginar cómo sería vivir distinto.</p>
@endsection