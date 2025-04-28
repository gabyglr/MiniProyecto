<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Pedido;

use App\Policies\UserPolicy;
use App\Policies\ProductoPolicy;
use App\Policies\CategoriaPolicy;
use App\Policies\PedidoPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Producto::class => ProductoPolicy::class,
        Categoria::class => CategoriaPolicy::class,
        Pedido::class => PedidoPolicy::class,

    ];


    public function boot(): void
    {
        $this->registerPolicies();

    
        Gate::define('manage-users', function ($user) {
            return $user->role === 'gerente';
        });
    }
}