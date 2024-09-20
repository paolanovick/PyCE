<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('images')->insert([
            [
                'path' => 'images/public/imagenes/Dominio Cabernet Sauvignon.jpg',
                'type' => 'vino',
            ],
            [
                'path' => 'images/public/imagenes/Dominio Chardonnay.jpg',
                'type' => 'vino',
            ],
            [
                'path' => 'images/public/imagenes/Dominio Malbec.jpg',
                'type' => 'vino',
            ],
            [
                'path' => 'images/public/imagenes/asesoria/bottles-wine-with-barrel.jpg',
                'type' => 'asesoría',
            ],
            [
                'path' => 'images/public/imagenes/asesoria/glass-wine-with-stunning-view-vineyard-sunset.jpg',
                'type' => 'asesoría',
            ],
            [
                'path' => 'images/public/imagenes/Dominio Cabernet Sauvignon.jpg',
                'type' => 'blog',
            ],
            [
                'path' => 'images/public/imagenes/Dominio Malbec.jpg',
                'type' => 'blog',
            ],
            [
                'path' => 'images/public/imagenes/club/group-friends-eating-restaurant (1).jpg',
                'type' => 'club',
            ],
            [
                'path' => 'images/database/seeders/ImagesTableSeeder.php public/imagenes/club/group-friends-eating-restaurant.jpg',
                'type' => 'club',
            ],
            
            // Puedes agregar más registros si lo deseas
        ]);
    }
}
