<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Crear Nuevo Usuario</h1>
        <form action="{{ route('gerente.usuarios.store') }}" method="POST">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required minlength="8">

            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <label for="role">Rol:</label>
            <select name="role" id="role">
                <option value="gerente">Gerente</option>
                <option value="empleado">Empleado</option>
                <option value="cliente">Cliente</option>
            </select>

            <button type="submit">Crear Usuario</button>
        </form>
        <a href="{{ route('gerente.usuarios.index') }}">Volver</a>
    </div>
</body>
</html>