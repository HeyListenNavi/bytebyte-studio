@extends('layouts.project', ['href' => 'https://cleanqueens.us/'])

@section('title', 'CleanQueens')

@section('subtitle', 'El poder de la limpieza, al alcance de un clic')

@section('project', 'https://cleanqueens.us')

@section('thumbnail', Vite::mockup('cleanqueens-thumbnail.png'))
@section('mockup-one', Vite::mockup('cleanqueens-1.png'))
@section('mockup-two', Vite::mockup('cleanqueens-2.png'))

@section('company-description')
<p>CleanQueens es una empresa dedicada a brindar servicios de limpieza a domicilio, de forma profesional, confiable y puntual. Su equipo está conformado por trabajadoras expertas que ponen especial cuidado en cada espacio que atienden. Antes, sus clientes agendaban servicios por mensajes o llamadas, lo que generaba confusiones, tiempos muertos y desorganización. CleanQueens buscaba dar el siguiente paso y modernizarse, sin perder el toque humano que las caracteriza.</p>
@endsection

@section('project-description')
<p>Desde ByteBite Studio creamos una plataforma pensada para que cualquier persona pueda agendar una limpieza en segundos. El cliente elige el tipo de servicio, el día, la hora y el lugar. CleanQueens recibe la solicitud al instante y puede gestionarla fácilmente. También desarrollamos un panel interno para llevar control de horarios, pagos, clientes y personal, todo desde una sola interfaz. Con esta app, CleanQueens pudo organizar su operación, ahorrar tiempo y ofrecer una experiencia moderna a sus clientas, sin perder la calidez que las distingue.</p>
@endsection