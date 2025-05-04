@extends('layouts.project', ['href' => 'https://mariabonitaboutique.shop/'])

@section('title', 'MariaBonita')

@section('subtitle', 'Una boutique con alma, ahora en tu bolsillo')

@section('project', 'https://mariabonitaboutique.shop')

@section('thumbnail', Vite::mockup('mariabonita-thumbnail.png'))
@section('mockup-one', Vite::mockup('mariabonita-1.png'))
@section('mockup-two', Vite::mockup('mariabonita-2.png'))

@section('company-description')
<p> MariaBonita es una boutique de ropa que se ha ganado el cariño de sus clientas por ofrecer piezas únicas, elegantes y con un toque especial. Durante mucho tiempo, sus ventas se hacían por redes sociales y mensajes, lo cual funcionaba, pero limitaba su crecimiento. María, la fundadora, soñaba con tener su propia tienda en línea, un espacio donde pudiera mostrar sus productos con el mismo cuidado con el que los elige, y al mismo tiempo mantener el contacto cercano con sus clientas.</p>
@endsection

@section('project-description')
<p> Desde ByteBite Studio creamos un ecommerce completo, diseñado para que vender ropa sea tan sencillo como elegirla. La tienda online permite subir productos, gestionar inventario, recibir pedidos y pagos de forma automatizada. Además, construimos una versión tipo app (PWA) que las clientas pueden guardar en su celular, con la ventaja de poder recibir notificaciones de nuevos lanzamientos, promociones o recordatorios. Gracias a esto, MariaBonita no solo vendió más, sino que creó una experiencia de compra moderna sin perder la calidez que la hace especial.</p>
@endsection