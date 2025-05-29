<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-lg mx-auto mt-10 p-6 bg-white shadow rounded">
    <h1 class="text-xl font-bold mb-4">Crear Usuario</h1>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1" for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1" for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1" for="password">Contraseña</label>
            <input type="password" name="password" id="password"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1" for="password_confirmation">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1" for="role">Rol</label>
            <select name="role" id="role"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300"
                onchange="toggleTipoCliente()">
                <option value="">Selecciona un rol</option>
                <option value="Administrador" {{ old('role') == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                <option value="Gerente" {{ old('role') == 'Gerente' ? 'selected' : '' }}>Gerente</option>
                <option value="Cliente" {{ old('role') == 'Cliente' ? 'selected' : '' }}>Cliente</option>
            </select>
        </div>

        {{-- Este div se muestra solo si el rol es Cliente --}}
        <div class="mb-4" id="tipoClienteContainer" style="display: none;">
            <label class="block font-semibold mb-1" for="tipo_cliente">Tipo de Cliente</label>
            <select name="tipo_cliente" id="tipo_cliente"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
                <option value="">Selecciona un tipo</option>
                <option value="Comprador" {{ old('tipo_cliente') == 'Comprador' ? 'selected' : '' }}>Comprador</option>
                <option value="Vendedor" {{ old('tipo_cliente') == 'Vendedor' ? 'selected' : '' }}>Vendedor</option>
            </select>
        </div>

        <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
            Guardar
        </button>
    </form>
</div>

<script>
    function toggleTipoCliente() {
        const roleSelect = document.getElementById('role');
        const tipoClienteContainer = document.getElementById('tipoClienteContainer');

        if (roleSelect.value === 'Cliente') {
            tipoClienteContainer.style.display = 'block';
        } else {
            tipoClienteContainer.style.display = 'none';
        }
    }

    // Ejecutar al cargar para mantener el estado si hay error de validación
    document.addEventListener('DOMContentLoaded', () => {
        toggleTipoCliente();
    });
</script>

</body>
</html>


