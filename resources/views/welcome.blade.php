<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <header>
        <h1>Bienvenido a nuestra Tienda</h1>
        <nav>
            <a href="{{ route('login') }}">Iniciar sesión</a>
            <a href="{{ route('register') }}">Registrarse</a>
        </nav>
    </header>
    <section>
        <h2>Quiénes somos</h2>
        <p>Información sobre la empresa...</p>
    </section>
</body>
</html>