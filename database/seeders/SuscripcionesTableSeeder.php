<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User; // Asegúrate de que el modelo User esté importado

class SuscripcionesTableSeeder extends Seeder
{
    public function run()
    {
        // Obtener usuarios de la tabla de usuarios
        $usuarios = User::all();

        foreach ($usuarios as $usuario) {
            DB::table('suscripciones')->insert([
                'nombre' => $usuario->name,
                'email' => $usuario->email,
            ]);
        }
    }
}

