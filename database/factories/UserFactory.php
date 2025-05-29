<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // Dentro de UserFactory.php

public function definition(): array
{
    return [
        'name' => fake()->name(),
        'email' => fake()->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => static::$password ??= Hash::make('password'),
        'role' => $this->faker->randomElement(['Administrador', 'Gerente', 'Cliente']),
        // Agregamos 'tipo_cliente' para los clientes, null para otros roles
        'tipo_cliente' => null,
        'remember_token' => Str::random(10),
    ];
}

/**
 * Estado para Cliente comprador
 */
public function comprador(): static
{
    return $this->state(fn (array $attributes) => [
        'role' => 'Cliente',
        'tipo_cliente' => 'Comprador',
    ]);
}

/**
 * Estado para Cliente vendedor
 */
public function vendedor(): static
{
    return $this->state(fn (array $attributes) => [
        'role' => 'Cliente',
        'tipo_cliente' => 'Vendedor',
    ]);
}


    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
