<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaAsesoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('categoria_asesorias')->truncate();
        DB::table('categoria_asesorias')->insert([
            [
                'nombre' => 'Cata de Vinos ',
                'descripcion' => 'Cata de Vinos',
            ],
            [
                'nombre' => 'Asesoria en Bodegas',
                'descripcion' => 'Asesoria en Bodega',
            ],
            [
                'nombre' => 'Estrategias de Maridaje',
                'descripcion' => 'Estrategias de Maridaje',
            ],
            // Puedes agregar más registros aquí, asegurándote de que cada uno tenga todos los campos requeridos.
        ]);
    }
}
