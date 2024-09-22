<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VinosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('vinos')->truncate();
        DB::table('vinos')->insert([
            [
                'nombre' => 'Dominio Gran Cabernet Sauvignon',
                'descripcion' => 'Un vino tinto robusto y lleno de carácter.',
                'precio' => 20.00,
                'imagen' => 'public/storage/imagenes/Dominio Cabernet Sauvignon.jpg',
                'ficha_tecnica' => implode('; ', [
                    'Año cosecha 2018',
                    'Variedad 100% Cabernet Sauvignon de Gualtallary',
                    'Crianza 14 meses el 20% del corte en roble francés',
                    'Enólogo Lic. Mariano Di Paola',
                    'Potencial de guarda 10 años'
                ]),
                'notas_de_cata' => 'Notas de frutas rojas y especias.',
                'sugerencias_de_acompaniamiento' => 'Ojo de bife a la parrilla, carnes rojas salseadas y grilladas, pimientos asados, quesos madurados',
            ],
            // Puedes agregar más registros aquí, asegurándote de que cada uno tenga todos los campos requeridos.
        ]);
    }
}
