<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProfileController;

// Página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Redirección según el rol
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();

    return match ($user->role) {
        'Administrador' => redirect()->route('admin.dashboard'),
        'Gerente' => redirect()->route('gerente.dashboard'),
        'Cliente' => redirect()->route('cliente.dashboard'),
        default => abort(403, 'Rol no permitido'),
    };
})->name('dashboard');

// 👤 Rutas de perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para admin - gestión completa de usuarios
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [UserController::class, 'dashboardAdmin'])->name('dashboard');

    // CRUD sin prefijo "usuarios"
    Route::get('/index', [UserController::class, 'indexAdmin'])->name('index');
    Route::get('/create', [UserController::class, 'createAdmin'])->name('create');
    Route::post('/', [UserController::class, 'storeAdmin'])->name('store');
    Route::get('/{user}/edit', [UserController::class, 'editAdmin'])->name('edit');
    Route::put('/{user}', [UserController::class, 'updateAdmin'])->name('update');
    Route::delete('/{user}', [UserController::class, 'destroyAdmin'])->name('destroy');
});

// Rutas para gerente
Route::middleware(['auth'])->prefix('gerente')->name('gerente.')->group(function () {
    Route::get('/', [UserController::class, 'dashboardGerente'])->name('dashboard');
});

// 🛍️ Dashboard del Cliente
Route::middleware(['auth'])->prefix('cliente')->name('cliente.')->group(function () {
    Route::get('/', function () {
        return view('cliente');
    })->name('dashboard');
});

// 💸 Rutas de ventas
Route::middleware(['auth'])->group(function () {
    Route::resource('ventas', VentaController::class);
    Route::post('/ventas/{venta}/validar', [VentaController::class, 'validarVenta'])->name('ventas.validar');
    Route::get('/ventas/{venta}/ticket', [VentaController::class, 'descargarTicket'])->name('ventas.ticket');
});

// 🧾 Rutas de autenticación Breeze
require __DIR__.'/auth.php';
