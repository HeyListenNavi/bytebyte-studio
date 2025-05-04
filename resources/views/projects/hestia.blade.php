@extends('layouts.project', ['href' => 'https://sistemahestia.com/'])

@section('title', 'Hestia')

@section('subtitle', 'La app que transforma la vida dentro de tu privada')

@section('project', 'https://sistemahestia.com')

@section('thumbnail', Vite::mockup('hestia-thumbnail.png'))
@section('mockup-one', Vite::mockup('hestia-1.png'))
@section('mockup-two', Vite::mockup('hestia-2.png'))

@section('company-description')
<p>Hestia nació de una necesidad real que existe en muchas comunidades cerradas: vivir con más orden, comunicación y tranquilidad. Las inmobiliarias y administraciones suelen gestionar procesos con hojas, llamadas y mensajes sueltos que se pierden o ignoran. El equipo detrás de Hestia buscaba una manera de centralizar todo en un solo lugar, fácil de usar y accesible para cualquier residente o guardia.</p>
@endsection

@section('project-description')
<p>En ByteBite Studio diseñamos y desarrollamos una aplicación completa para cubrir todo lo que una privada necesita. Los residentes pueden crear invitaciones digitales para sus visitas, publicar o comprar en un marketplace comunitario, hacer quejas que realmente se atienden, pedir mantenimiento o reservar amenidades como la alberca o el salón. También pueden pedir apoyo de guardias, hacer pagos y ver avisos importantes de la administración. Los guardias, por su parte, tienen su propia vista para revisar accesos, escanear códigos y gestionar entradas. Todo está conectado, organizado y pensado para que la vida dentro de una comunidad sea más fluida, segura y eficiente.</p>
@endsection