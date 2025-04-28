<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Administrador',
        ]);

        User::factory()->count(3)->create(['role' => 'Gerente']);
        User::factory()->count(5)->create(['role' => 'Cliente']);
    }
}

