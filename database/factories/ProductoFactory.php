<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2, 10, 1000),
            'categoria_id' => Categoria::inRandomOrder()->first()?->id ?? Categoria::factory(),
            'vendedor_id' => User::where('role', 'Cliente')->inRandomOrder()->first()?->id ?? User::factory(),
        ];
    }
}

