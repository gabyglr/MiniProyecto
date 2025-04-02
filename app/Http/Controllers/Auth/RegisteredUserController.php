<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    // Muestra el formulario de registro
    public function create()
    {
        return view('auth.register');
    }

    // Procesa el registro de un nuevo usuario
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'password.confirmed' => 'Las contraseñas no coinciden',  
        ]);

        // Crear usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'cliente', // Se asigna el rol por defecto
        ]);

        // Evento de usuario registrado
        event(new Registered($user));

    

        // Redirigir a la página de registro con mensaje de éxito
        return redirect()->route('register')->with('success', 'Registro exitoso. ¡Bienvenido!');
    }
}

