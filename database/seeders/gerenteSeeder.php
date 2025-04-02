<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GerenteSeeder extends Seeder
{
    public function run()
    {
        $gerentes = [
            [
                'name' => 'Admin',
                'email' => 'lopezramirezgabriela95@gmail.com',
                'password' => Hash::make('Compu1234'), // Puedes cambiar la contraseña
                'role' => 'gerente',
            ],
        ];

        foreach ($gerentes as $gerente) {
            User::create($gerente);
        }
    }
}
