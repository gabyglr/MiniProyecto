<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // ADMIN: dashboard general
    public function dashboardAdmin()
{
    $totalUsuarios = User::count();
    $gerentes = User::where('role', 'Gerente')->count();
    $clientes = User::where('role', 'Cliente')->count();
    $usuarios = User::all();

    $gerentesPorcentaje = $totalUsuarios > 0 ? round(($gerentes / $totalUsuarios) * 100, 2) : 0;
    $clientesPorcentaje = $totalUsuarios > 0 ? round(($clientes / $totalUsuarios) * 100, 2) : 0;

    return view('admin.dashboard', compact(
        'totalUsuarios',
        'gerentes',
        'clientes',
        'gerentesPorcentaje',
        'clientesPorcentaje',
        'usuarios'
    ));
}


    // GERENTE: dashboard con estadísticas
    public function dashboardGerente()
    {
        $totalUsuarios = User::count();
        return view('gerente.dashboard', compact('totalUsuarios'));
    }

    // --- ADMIN: CRUD de usuarios (separado del gerente) ---

    public function indexAdmin()
    {
        $usuarios = User::all();
        return view('admin.index', compact('usuarios'));
    }

    public function createAdmin()
    {
        return view('admin.create');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:Administrador,Gerente,Empleado,Cliente' // admin puede asignar más roles
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.index')->with('success', 'Usuario creado correctamente');
    }

    public function editAdmin(User $user)
    {
        return view('admin.edit', compact('user'));
    }

    public function updateAdmin(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:Administrador,Gerente,Empleado,Cliente'
        ]);

        $user->update($request->only(['name', 'email', 'role']));

        return redirect()->route('admin.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function destroyAdmin(User $user)
    {
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'Usuario eliminado correctamente');
    }

}
