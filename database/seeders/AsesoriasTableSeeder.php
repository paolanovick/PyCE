<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsesoriasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('asesorias')->truncate();
        DB::table('asesorias')->insert([
            [ 
                'nombre_apellido'=>'paola',
                'celular'=>'1151215750',
                'email'=>'pao@gmail.com',
                'categoria_id' => 1
            ],
            [
                'nombre_apellido' => 'jhonatan',
                'celular' => '11234567',
                'email' => 'jhon@gmail.com',
                'categoria_id' => 2
            ],

            // Puedes agregar más registros si lo deseas
        ]);

    }
}
