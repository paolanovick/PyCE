<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsesoriasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('asesorias')->insert([
            [
                'titulo' => 'Cata de Vinos',
                'resumen' => 'Descubre el mundo del vino a través de catas guiadas con expertos.',
                'contenido' => 'En esta asesoría, te ofrecemos la oportunidad de participar en catas de vinos donde aprenderás a identificar aromas, sabores y características de diferentes varietales. Nuestros expertos te guiarán en la degustación, brindándote conocimientos sobre la historia y la producción del vino.',
                'imagen' => 'images/public/imagenes/asesoria/cata-de-vinos.jpg',
                'email' =>"pao@gmail.com",
            ],
            [
                'titulo' => 'Asesoría en Bodegas',
                'resumen' => 'Recibe asesoría personalizada para la gestión y optimización de tu bodega.',
                'contenido' => 'Ofrecemos asesorías especializadas para viticultores y propietarios de bodegas. Aprenderás sobre la gestión eficiente de la producción, técnicas de vinificación y estrategias para mejorar la calidad de tus vinos. Nuestro equipo te apoyará en cada paso del proceso, desde la cosecha hasta la comercialización.',
                'imagen' => 'images/public/imagenes/asesoria/bodega.jpg',
                'email' => "pao@gmail.com",
            ],
            [
                'titulo' => 'Estrategias de Maridaje',
                'resumen' => 'Aprende a combinar vinos con diferentes platos para realzar su sabor.',
                'contenido' => 'En esta asesoría, te enseñaremos las mejores prácticas de maridaje entre vinos y comidas. Descubrirás cómo seleccionar el vino adecuado para cada ocasión y cómo los sabores pueden complementarse para crear una experiencia gastronómica única.',
                'imagen' => 'images/public/imagenes/asesoria/maridaje.jpg',
                'email' => "pao@gmail.com",
            ],
            // Puedes agregar más registros si lo deseas
        ]);

    }
}
