<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\Producto;

class PedidoSeeder extends Seeder
{
    public function run(): void
    {
        Pedido::factory(20)->create()->each(function ($pedido) {
            $productos = Producto::inRandomOrder()->take(rand(1, 5))->get();
            $total = 0;

            foreach ($productos as $producto) {
                $cantidad = rand(1, 3);
                $pedido->productos()->attach($producto->id, ['cantidad' => $cantidad]);
                $total += $producto->precio * $cantidad;
            }

            $pedido->total = $total;
            $pedido->save();
        });
    }
}

