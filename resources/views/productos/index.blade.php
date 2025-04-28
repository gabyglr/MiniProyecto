@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Productos</h1>

    @can('create', App\Models\Producto::class)
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear nuevo producto</a>
    @endcan

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>${{ number_format($producto->precio, 2) }}</td>
                <td>{{ $producto->categoria->nombre }}</td>
                <td>
                    @can('update', $producto)
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-sm btn-warning">Editar</a>
                    @endcan
                    @can('delete', $producto)
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $productos->links() }}
</div>
@endsection