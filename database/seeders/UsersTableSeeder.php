<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User Demo',
            'email' => 'correo@correo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
            'rol' => 'administrador'
        ]);
    }
}
