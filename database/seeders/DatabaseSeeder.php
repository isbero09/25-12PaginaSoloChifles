<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PagesTableSeeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear usuario administrador por defecto si no existe
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('password123'),
                'is_admin' => true,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]
        );

        $this->call(PagesTableSeeder::class);
    }
}