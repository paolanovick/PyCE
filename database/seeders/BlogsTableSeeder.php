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
                
                 'imagen' => 'storage/blog1.jpg',
            ],
            [
                'titulo' => 'Beneficios del Vino Blanco',
                'contenido' => 'El vino blanco no solo es refrescante, sino que también ofrece varios beneficios para la salud. Aprende sobre las propiedades y ventajas de incluirlo en tu dieta. En este artículo, exploramos los factores clave para elegir el vino ideal para cualquier ocasión. Desde la selección de la variedad de uva hasta el maridaje adecuado, descubrirás todos los secretos para convertirte en un experto en vinos.

Aprende sobre la temperatura de servicio, las copas adecuadas y cómo leer las etiquetas para hacer la mejor elección en cada situación. ¡No dejes que el momento te sorprenda sin el vino perfecto!',
                'imagen' => 'storage/blog2.jpg',
            ],
            [
                'titulo' => 'Cómo Elegir un Vino para una Cena',
                'contenido' => 'Elegir el vino adecuado para una cena puede realzar la experiencia gastronómica. Aquí te damos algunas pautas para seleccionar el mejor vino para cada ocasión.',
                'imagen' => 'storage/blog3.jpg',
            ],
            // Puedes agregar más registros si lo deseas
        ]);
    }
}
