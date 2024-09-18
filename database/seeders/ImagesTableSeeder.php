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
                'path' => 'images/vino_tinto.jpg',
                'type' => 'vino',
            ],
            [
                'path' => 'images/vino_blanco.jpg',
                'type' => 'vino',
            ],
            [
                'path' => 'images/asesoria1.jpg',
                'type' => 'asesoría',
            ],
            [
                'path' => 'images/asesoria2.jpg',
                'type' => 'asesoría',
            ],
            [
                'path' => 'images/blog_post1.jpg',
                'type' => 'blog',
            ],
            [
                'path' => 'images/blog_post2.jpg',
                'type' => 'blog',
            ],
            // Puedes agregar más registros si lo deseas
        ]);
    }
}
