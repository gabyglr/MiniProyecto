<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios</title>
    <!-- Tailwind desde CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="max-w-6xl mx-auto mt-8 p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Gestión de Usuarios</h1>

        <a href="{{ route('gerente.usuarios.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            + Nuevo Usuario
        </a>

        <table class="w-full mt-4 border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 border">Nombre</th>
                    <th class="p-2 border">Email</th>
                    <th class="p-2 border">Rol</th>
                    <th class="p-2 border">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $user)
                    <tr>
                        <td class="p-2 border">{{ $user->name }}</td>
                        <td class="p-2 border">{{ $user->email }}</td>
                        <td class="p-2 border">{{ $user->role }}</td>
                        <td class="p-2 border">
                            <div class="flex gap-2">
                                <a href="{{ route('gerente.usuarios.edit', $user) }}" class="text-blue-600 hover:underline">Editar</a>
                                <form action="{{ route('gerente.usuarios.destroy', $user) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>


