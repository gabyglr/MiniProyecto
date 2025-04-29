<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function create(User $user) {
        return $user->role === 'Administrador';
    }
    
    public function update(User $user, User $target) {
        return $user->role === 'Gerente' && !in_array($target->role, ['Administrador', 'Gerente']);
    }
    
    public function viewAny(User $user) {
        return in_array($user->role, ['Administrador', 'Gerente']);
    }
    
    public function delete(User $user, User $target) {
        return $user->role === 'Administrador' && $target->role !== 'Administrador';
    }
    
}
