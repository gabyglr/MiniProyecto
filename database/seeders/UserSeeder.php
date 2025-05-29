<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Crear admin fijo
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'),
                'role' => 'Administrador',
            ]
        );

        // Crear gerentes
        User::factory()->count(3)->create(['role' => 'Gerente']);

        // Crear categorías (5) asegurando "Ofertas"
        $categorias = collect();

        // Crear "Ofertas" si no existe
        $ofertas = Categoria::firstOrCreate(
            ['nombre' => 'Ofertas'],
            ['descripcion' => 'Productos en oferta o con descuento']
        );
        $categorias->push($ofertas);

        // Crear otras 4 categorías con factory
        $otras = Categoria::factory()->count(4)->create();
        $categorias = $categorias->merge($otras);

        // Crear 70 compradores
        User::factory()->count(70)->create([
            'role' => 'Cliente',
            'tipo_cliente' => 'Comprador',
        ]);

        // Crear 30 vendedores
        User::factory()->count(30)->create([
            'role' => 'Cliente',
            'tipo_cliente' => 'Vendedor',
        ])->each(function ($vendedor) use ($categorias) {
            // Crear al menos 3 productos por vendedor
            for ($i = 0; $i < 3; $i++) {
                $producto = Producto::factory()->create([
                    'vendedor_id' => $vendedor->id,
                ]);

                // Asignar entre 1 y 3 categorías
                $categoriaIds = $categorias->random(rand(1, 3))->pluck('id')->toArray();
                $producto->categorias()->sync($categoriaIds);

                // Simular fotos dummy (rutas públicas)
                $fotos = [];
                $numFotos = rand(2, 4);
                for ($j = 0; $j < $numFotos; $j++) {
                    $fotos[] = 'productos/foto_dummy_' . rand(1, 10) . '.jpg';
                }
                foreach ($fotos as $foto) {
                    $producto->imagens()->create(['ruta' => $foto]);
                }


            }
        });
    }
}



