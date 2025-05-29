@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">Bienvenido, {{ Auth::user()->name }}</h1>

    <div class="space-y-4">
        <p class="text-gray-700">Este es tu panel de cliente. Desde aquí puedes:</p>
        <ul class="list-disc list-inside text-gray-800">
            <li>Ver tus ventas realizadas</li>
            <li>Realizar nuevas compras</li>
            <li>Descargar tus tickets</li>
        </ul>

        <a href="{{ route('ventas.index') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Ir a mis ventas
        </a>
    </div>
</div>
@endsection
