@extends('layouts.project', ['href' => 'https://cerealis.cloud/'])

@section('title', 'Cerealis')

@section('subtitle', 'El futuro de la Agricultura')

@section('project', 'https://cerealis.cloud')

@section('thumbnail', Vite::mockup('cerealis-thumbnail.png'))
@section('mockup-one', Vite::mockup('cerealis-1.png'))
@section('mockup-two', Vite::mockup('cerealis-2.png'))

@section('company-description')
<p>Cerealis busca llevar agricultura de precisión a pequeños y medianos productores, de forma accesible y sencilla. Muchos de ellos no contaban con tecnología para monitorear el estado de sus cultivos, lo que dificultaba la toma de decisiones y afectaba su rendimiento. Cerealis nació con la misión de cambiar eso: ofrecer herramientas que modernicen el campo sin complicarlo.</p>
@endsection


@section('project-description')
<p>Desde ByteBite Studio diseñamos una plataforma completa donde los agricultores pueden programar patrullas con drones que analizan sus tierras y detectan problemas como plagas o falta de riego. El dron regresa a su base, se recarga automáticamente y sube la información a la nube. Los datos se procesan con inteligencia artificial y se presentan en un panel claro y fácil de usar. Así, Cerealis logró que la tecnología dejara de ser un lujo para convertirse en una aliada cotidiana para quienes trabajan la tierra.</p>
@endsection
