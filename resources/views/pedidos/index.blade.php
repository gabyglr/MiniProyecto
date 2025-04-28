@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Pedidos</h1>

    @can('create', App\Models\Pedido::class)
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary mb-3">Nuevo Pedido</a>
    @endcan

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Vendedor</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->cliente->name }}</td>
                <td>{{ $pedido->vendedor->name }}</td>
                <td>{{ $pedido->fecha }}</td>
                <td>
                    @can('update', $pedido)
                        <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-warning btn-sm">Editar</a>
                    @endcan
                    @can('delete', $pedido)
                        <form action="{{ route('pedidos.destroy', $pedido) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $pedidos->links() }}
</div>
@endsection