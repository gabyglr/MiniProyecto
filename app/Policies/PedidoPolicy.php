<?php

namespace App\Policies;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PedidoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user) {
        return in_array($user->role, ['Administrador', 'Gerente']);
    }
    
    public function create(User $user) {
        return in_array($user->role, ['Administrador', 'Gerente']);
    }
    
    public function update(User $user) {
        return in_array($user->role, ['Administrador', 'Gerente']);
    }
    
    public function delete(User $user) {
        return $user->role === 'Administrador';
    }
    
}
