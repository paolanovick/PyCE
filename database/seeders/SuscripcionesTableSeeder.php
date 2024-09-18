<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuscripcionesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('suscripciones')->insert([
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
            ],
            [
                'nombre' => 'Ana Gómez',
                'email' => 'ana.gomez@example.com',
            ],
            [
                'nombre' => 'Carlos Fernández',
                'email' => 'carlos.fernandez@example.com',
            ],
            // Puedes agregar más registros si lo deseas
        ]);
    }
}
