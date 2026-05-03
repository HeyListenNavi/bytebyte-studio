<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Hestia',
                'slug' => 'hestia',
                'subtitle' => 'La app que transforma la vida dentro de tu privada',
                'url' => 'https://hestia.live',
                'thumbnail' => 'mockups/hestia-thumbnail.png',
                'mockup_one' => 'mockups/hestia-1.png',
                'mockup_two' => 'mockups/hestia-2.png',
                'company_description' => '<p>Hestia es una plataforma diseñada para mejorar la convivencia y administración de privadas y fraccionamientos. Los residentes suelen enfrentar problemas de comunicación con la administración, lentitud en el acceso de visitas y falta de transparencia en los gastos comunes. Hestia nació para solucionar esto a través de una aplicación móvil intuitiva.</p>',
                'project_description' => '<p>Creamos una aplicación móvil y un panel administrativo que centraliza todas las necesidades de una privada. Desde la generación de códigos QR para visitas hasta el pago de mantenimiento y reportes de incidencias. Con Hestia, la administración es más eficiente y los vecinos disfrutan de una experiencia digital moderna y segura.</p>',
                'sort_order' => 1,
            ],
            [
                'title' => 'CleanQueens',
                'slug' => 'cleanqueens',
                'subtitle' => 'El poder de la limpieza, al alcance de un clic',
                'url' => 'https://cleanqueens.mx',
                'thumbnail' => 'mockups/cleanqueens-thumbnail.png',
                'mockup_one' => 'mockups/cleanqueens-1.png',
                'mockup_two' => 'mockups/cleanqueens-2.png',
                'company_description' => '<p>CleanQueens es un servicio premium de limpieza para hogares y oficinas. Su objetivo es dignificar el trabajo doméstico y ofrecer a sus clientes una experiencia de reserva rápida, confiable y segura. Antes de su digitalización, dependían de procesos manuales y comunicación vía WhatsApp que se volvía caótica con el crecimiento.</p>',
                'project_description' => '<p>Desarrollamos una plataforma de reserva en línea donde los usuarios pueden cotizar y agendar servicios de limpieza en segundos. El sistema gestiona automáticamente la disponibilidad del personal, las zonas de cobertura y los pagos recurrentes. Esto permitió a CleanQueens escalar su operación de manera organizada y profesionalizar su atención al cliente.</p>',
                'sort_order' => 2,
            ],
            [
                'title' => 'Corteza',
                'slug' => 'corteza',
                'subtitle' => 'Hogares diminutos, sueños gigantes',
                'url' => 'https://corteza.com.mx',
                'thumbnail' => 'mockups/corteza-thumbnail.png',
                'mockup_one' => 'mockups/corteza-1.png',
                'mockup_two' => 'mockups/corteza-2.png',
                'company_description' => '<p>Corteza se especializa en el diseño y construcción de "Tiny Houses" o casas diminutas. Su filosofía se basa en el minimalismo, la sostenibilidad y la conexión con la naturaleza. Buscaban una forma de mostrar sus prototipos y permitir que los interesados pudieran visualizar cómo sería vivir en uno de sus modelos.</p>',
                'project_description' => '<p>Diseñamos un catálogo digital interactivo que destaca la estética y funcionalidad de cada modelo de casa. Incluimos galerías detalladas, planos técnicos y una sección de preguntas frecuentes para educar a los usuarios sobre el estilo de vida Tiny. El resultado es un sitio web que transmite serenidad y modernidad, alineado perfectamente con la identidad de marca de Corteza.</p>',
                'sort_order' => 3,
            ],
            [
                'title' => 'Ares Real State',
                'slug' => 'ares',
                'subtitle' => 'Más que casas, encontramos tu lugar en el mundo',
                'url' => 'https://aresrealestate.click/',
                'thumbnail' => 'mockups/ares-thumbnail.png',
                'mockup_one' => 'mockups/ares-1.png',
                'mockup_two' => 'mockups/ares-2.png',
                'company_description' => '<p>Ares Real State es una inmobiliaria que se dedica a ayudar a personas a encontrar su próximo hogar, ya sea en renta o en venta. Su equipo acompaña de cerca a quienes están buscando un espacio para vivir, crecer o comenzar una nueva etapa. Sabían que muchas personas se sienten abrumadas al buscar casa: no saben por dónde empezar, reciben poca atención o encuentran sitios difíciles de usar. Ares quería ofrecer una experiencia más clara, cálida y acompañada.</p>',
                'project_description' => '<p>Desde ByteBite Studio diseñamos una página web pensada para personas reales: con buscadores simples, filtros útiles y fichas claras de cada propiedad. El sitio permite explorar fácilmente las opciones disponibles y contactar directamente a un asesor sin rodeos. También incluimos herramientas para que el equipo de Ares pueda subir nuevas propiedades y gestionar solicitudes sin complicaciones. Gracias a esta plataforma, Ares pudo modernizar su servicio, mejorar su presencia online y hacer que encontrar hogar sea una experiencia mucho más humana.</p>',
                'sort_order' => 4,
            ],
            [
                'title' => 'Cerealis',
                'slug' => 'cerealis',
                'subtitle' => 'El futuro de la Agricultura',
                'url' => 'https://cerealis.cloud/',
                'thumbnail' => 'mockups/cerealis-thumbnail.png',
                'mockup_one' => 'mockups/cerealis-1.png',
                'mockup_two' => 'mockups/cerealis-2.png',
                'company_description' => '<p>Cerealis busca llevar agricultura de precisión a pequeños y medianos productores, de forma accesible y sencilla. Muchos de ellos no contaban con tecnología para monitorear el estado de sus cultivos, lo que dificultaba la toma de decisiones y afectaba su rendimiento. Cerealis nació con la misión de cambiar eso: ofrecer herramientas que modernicen el campo sin complicarlo.</p>',
                'project_description' => '<p>Desde ByteBite Studio diseñamos una plataforma completa donde los agricultores pueden programar patrullas con drones que analizan sus tierras y detectan problemas como plagas o falta de riego. El dron regresa a su base, se recarga automáticamente y sube la información a la nube. Los datos se procesan con inteligencia artificial y se presentan en un panel claro y fácil de usar. Así, Cerealis logró que la tecnología dejara de ser un lujo para convertirse en una aliada cotidiana para quienes trabajan la tierra.</p>',
                'sort_order' => 5,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
