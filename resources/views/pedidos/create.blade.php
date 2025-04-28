@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Pedido</h1>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select name="cliente_id" class="form-control" required>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="vendedor_id" class="form-label">Vendedor</label>
            <select name="vendedor_id" class="form-control" required>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                @endforeach
            </select>
            </div>

<div class="mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="date" name="fecha" class="form-control" required>
</div>

<button class="btn btn-success">Guardar</button>
<a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
@endsection