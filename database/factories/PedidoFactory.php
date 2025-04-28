<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    protected $model = Pedido::class;

    public function definition(): array
{
    return [
        'cliente_id' => \App\Models\User::inRandomOrder()->first()->id,
        'vendedor_id' => \App\Models\User::inRandomOrder()->first()->id,
        'fecha' => $this->faker->date(),
    ];
}
}

