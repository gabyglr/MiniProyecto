<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // Mostrar el dashboard según el rol del usuario
    public function dashboard()
{
    $users = User::all(); 
    return view('gerente', compact('users'));
}


    // Mostrar todos los usuarios
    public function index()
    {
        $users = User::all(); 
        return view('gerente', compact('users'));
    }

    // Mostrar formulario para crear un nuevo usuario
    public function create()
    {
        return view('create');
    }

    // Guardar un nuevo usuario
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:gerente,empleado,cliente',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        return redirect()->route('gerente.usuarios.index')->with('success', 'Usuario creado con éxito.');
    }

    // Mostrar formulario para editar un usuario
    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    // Actualizar un usuario
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|string|in:gerente,empleado,cliente',
        ]);

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'] ? Hash::make($validated['password']) : $user->password,
            'role' => $validated['role'],
        ]);

        return redirect()->route('gerente.usuarios.index')->with('success', 'Usuario actualizado con éxito.');
    }

    // Eliminar un usuario
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('gerente.usuarios.index')->with('success', 'Usuario eliminado con éxito.');
    }
}
