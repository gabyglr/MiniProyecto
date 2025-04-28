<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    \App\Models\User::factory(10)->create();

    $this->call([
        CategoriaSeeder::class,
        ProductoSeeder::class,
        UserSeeder::class,
    ]);

    \App\Models\Pedido::factory(20)->create();
}

}
