@props(['type'])

@php
$projects = [
    [
        'title' => 'Hestia',
        'subtitle' => 'La app que transforma la vida dentro de tu privada',
        'description' => '¿Te imaginas manejar invitaciones, quejas, pagos y hasta pedir seguridad desde una sola app?',
        'href' => route('hestia'),
        'src' => Vite::mockup('hestia-thumbnail.png'),
    ],
    [
        'title' => 'CleanQueens',
        'subtitle' => 'El poder de la limpieza, al alcance de un clic',
        'description' => '¿Y si agendar una limpieza fuera tan fácil como pedir comida a domicilio?',
        'href' => route('cleanqueens'),
        'src' => Vite::mockup('cleanqueens-thumbnail.png'),
    ],
    [
        'title' => 'Corteza',
        'subtitle' => 'Hogares diminutos, sueños gigantes',
        'description' => 'Una forma nueva de vivir, más libre, más conectada con la naturaleza, y diseñada por ti',
        'href' => route('corteza'),
        'src' => Vite::mockup('corteza-thumbnail.png'),
    ],
    [
        'title' => 'Ares Real State',
        'subtitle' => 'Más que casas, encontramos tu lugar en el mundo',
        'description' => 'Porque no se trata solo de buscar una propiedad, sino de encontrar dónde empezar tu nueva historia',
        'href' => route('ares'),
        'src' => Vite::mockup('ares-thumbnail.png'),
    ],
    [
        'title' => 'MedranoProductions',
        'subtitle' => 'Donde las ideas se vuelven campañas',
        'description' => 'Una presencia digital que da el primer paso por ti',
        'href' => route('medrano-productions'),
        'src' => Vite::mockup('medranoproductions-thumbnail.png'),
    ],
    [
        'title' => 'MariaBonita',
        'subtitle' => 'Una boutique con alma, ahora en tu bolsillo',
        'description' => 'Moda con estilo propio, desde una tienda online tan linda como sus prendas',
        'href' => route('maria-bonita'),
        'src' => Vite::mockup('mariabonita-thumbnail.png'),
    ],
    [
        'title' => 'Lyam Company',
        'subtitle' => 'Atención médica que empieza desde tu navegador',
        'description' => 'Un sitio web pensado para conectar salud, confianza y cercanía',
        'href' => route('lyam-company'),
        'src' => Vite::mockup('lyam-thumbnail.png'),
    ],
    [
        'title' => 'Cerealis',
        'subtitle' => 'El futuro de la Agricultura',
        'description' => 'La agricultura de precisión al alcance de todos',
        'href' => route('cerealis'),
        'src' => Vite::mockup('cerealis-thumbnail.png'),
    ]
];
@endphp

@foreach ($projects as $project)
    @if ($type === 'card')
        <x-proyect-card 
            :title="$project['title']" 
            :subtitle="$project['subtitle']"
            :description="$project['description']"
            :href="$project['href']" 
            :src="$project['src']"
        />
    @elseif ($type === 'preview')
        <x-proyect-preview :title="$project['title']" :background="$project['src']" :href="$project['href']"/>
    @endif
@endforeach
