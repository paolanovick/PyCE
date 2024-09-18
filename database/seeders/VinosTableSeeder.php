<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VinosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('vinos')->insert([
            [
                'nombre' => 'Vino Tinto',
                'descripcion' => 'Un vino tinto robusto con notas de frutas rojas.',
                'precio' => 20.00,
                'imagen' => 'vino_tinto.jpg',
            ],
            [
                'nombre' => 'Vino Blanco',
                'descripcion' => 'Un vino blanco refrescante con notas cítricas.',
                'precio' => 25.00,
                'imagen' => 'vino_blanco.jpg',
            ],
            // Puedes agregar más registros si lo deseas
        ]);
    }
}
