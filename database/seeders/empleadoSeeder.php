<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EmpleadoSeeder extends Seeder
{
    public function run()
    {
        $empleados = [
            [
                'name' => 'Maria',
                'email' => 'luperuizespinosa16@gmail.com',
                'password' => Hash::make('tl987cc1'), // Puedes cambiar la contraseña
                'role' => 'empleado',
            ],
        ];

        foreach ($empleados as $empleado) {
            User::create($empleado);
        }
    }
}
