<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\User;
use App\Http\Requests\StorePedidoRequest;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Pedido::class);
        $pedidos = Pedido::with('cliente', 'vendedor')->paginate(10);
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        $this->authorize('create', Pedido::class);
        $usuarios = User::all(); // Cliente y Vendedor
        return view('pedidos.create', compact('usuarios'));
    }

    public function store(StorePedidoRequest $request)
    {
        $this->authorize('create', Pedido::class);
        Pedido::create($request->validated());
        return redirect()->route('pedidos.index')->with('success', 'Pedido creado correctamente.');
    }

    public function edit(Pedido $pedido)
    {
        $this->authorize('update', $pedido);
        $usuarios = User::all();
        return view('pedidos.edit', compact('pedido', 'usuarios'));
    }

    public function update(StorePedidoRequest $request, Pedido $pedido)
    {
        $this->authorize('update', $pedido);
        $pedido->update($request->validated());
        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado.');
    }

    public function destroy(Pedido $pedido)
    {
        $this->authorize('delete', $pedido);
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado.');
    }
}

