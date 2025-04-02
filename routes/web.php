<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Redireccionar según el rol del usuario
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();

    return match ($user->role) {
        'gerente' => redirect()->route('gerente.dashboard'),
        'empleado' => redirect()->route('empleado.dashboard'),
        default => redirect()->route('cliente.dashboard'),
    };
})->name('dashboard');

// Rutas de dashboards
Route::middleware('auth')->group(function () {
    Route::get('/empleado', function () {
        return view('empleado');
    })->name('empleado.dashboard');

    Route::get('/cliente', function () {
        return view('cliente');
    })->name('cliente.dashboard');
});

// Rutas del perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas del gerente (usando el middleware de roles)
Route::middleware(['auth', 'verified'])->prefix('gerente')->name('gerente.')->group(function () {
    // Dashboard del gerente
    Route::get('/', [UserController::class, 'dashboard'])->name('dashboard'); // Aquí hemos cambiado la ruta para apuntar correctamente a la vista 'gerente'

    // Rutas CRUD de usuarios
    Route::prefix('usuarios')->name('usuarios.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
    });
});

// Cargar las rutas de autenticación
require __DIR__.'/auth.php';
