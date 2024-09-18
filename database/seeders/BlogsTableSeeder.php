<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'titulo' => 'El Arte del Vino',
                'contenido' => 'Descubre las mejores técnicas para disfrutar del vino como un experto. En este blog, te compartimos consejos sobre cata, maridaje y más.',
                'imagen' => 'images/vino_art.jpg',
            ],
            [
                'titulo' => 'Beneficios del Vino Blanco',
                'contenido' => 'El vino blanco no solo es refrescante, sino que también ofrece varios beneficios para la salud. Aprende sobre las propiedades y ventajas de incluirlo en tu dieta.',
                'imagen' => 'images/vino_blanco_art.jpg',
            ],
            [
                'titulo' => 'Cómo Elegir un Vino para una Cena',
                'contenido' => 'Elegir el vino adecuado para una cena puede realzar la experiencia gastronómica. Aquí te damos algunas pautas para seleccionar el mejor vino para cada ocasión.',
                'imagen' => 'images/vino_cena.jpg',
            ],
            // Puedes agregar más registros si lo deseas
        ]);
    }
}
