@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">Dashboard del Gerente</h1>
    <p>Total de usuarios registrados: <strong>{{ $totalUsuarios }}</strong></p>
</div>
@endsection
