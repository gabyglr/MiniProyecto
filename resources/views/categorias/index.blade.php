@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorías</h1>

    @can('create', App\Models\Categoria::class)
        <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Nueva Categoría</a>
    @endcan

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
                <td>
                    @can('update', $categoria)
                        <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning btn-sm">Editar</a>
                        @endcan
                    @can('delete', $categoria)
                        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $categorias->links() }}
</div>
@endsection