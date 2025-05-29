<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Auth::user()->role === 'Gerente'
            ? Venta::all()
            : Venta::where('user_id', Auth::id())->get();

        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        // Validación e implementación según tu modelo de venta
        $venta = Venta::create([
            'user_id' => Auth::id(),
            'estado' => 'pendiente',
            'monto_total' => $request->monto_total,
            // ...
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta registrada');
    }

    public function show(Venta $venta)
    {
        // Verifica si el usuario puede ver la venta
        if (Auth::user()->role !== 'Gerente' && $venta->user_id !== Auth::id()) {
            abort(403);
        }

        return view('ventas.show', compact('venta'));
    }

    public function edit(Venta $venta)
    {
        if (Auth::id() !== $venta->user_id) {
            abort(403);
        }

        return view('ventas.edit', compact('venta'));
    }

    public function update(Request $request, Venta $venta)
    {
        if (Auth::id() !== $venta->user_id) {
            abort(403);
        }

        $venta->update($request->all());

        return redirect()->route('ventas.index')->with('success', 'Venta actualizada');
    }

    public function destroy(Venta $venta)
    {
        if (Auth::id() !== $venta->user_id) {
            abort(403);
        }

        $venta->delete();

        return redirect()->route('ventas.index')->with('success', 'Venta eliminada');
    }

    // ✅ Solo Gerente puede validar
    public function validarVenta(Venta $venta)
    {
        if (Auth::user()->role !== 'Gerente') {
            abort(403);
        }

        $venta->update(['estado' => 'validada']);

        return redirect()->route('ventas.index')->with('success', 'Venta validada');
    }

    // ✅ Cliente o gerente puede descargar
    public function descargarTicket(Venta $venta)
    {
        if (Auth::id() !== $venta->user_id && Auth::user()->role !== 'Gerente') {
            abort(403);
        }

        // Aquí puedes generar PDF o vista para el ticket
        return view('ventas.ticket', compact('venta'));
    }
}
