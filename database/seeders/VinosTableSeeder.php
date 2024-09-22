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
                'imagen' => 'imagenes/Dominio Gran Cabernet Sauvignon.jpg',
                'ficha_tecnica' => '',
                'Cosecha' => '',
                'Variedad' => '',
                'Crianza' => '',
                'Potencial de guarda' => '',

                'notas_de_cata' => '',
                'sugerencias_de_acompaniamiento' => ' ',
            ],
            // Puedes agregar más registros aquí, asegurándote de que cada uno tenga todos los campos requeridos.
        ]);
    }
}
