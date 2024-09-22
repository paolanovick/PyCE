<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*$this->call([AsesoriasTableSeeder::class, BlogsTableSeeder::class, ImagesTableSeeder::class, SuscripcionesTableSeeder::class, VinosTableSeeder::class]);
*/
        $this->call([BlogsTableSeeder::class]);
        $this->call([VinosTableSeeder::class]);
        $this->call([AsesoriasTableSeeder::class]);
        $this->call([SuscripcionesTableSeeder::class]);
    }
}
