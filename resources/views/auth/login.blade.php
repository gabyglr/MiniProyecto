<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="{{ asset('css/style_login.css') }}" rel="stylesheet">
</head>
<body>

    <div class="login-container">
        <h1><i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión</h1>

        {{-- Mostrar errores si existen --}}
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Correo electrónico">
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" id="password" name="password" required placeholder="Contraseña">
            </div>

            <button type="submit"><i class="fa-solid fa-arrow-right"></i> Iniciar sesión</button>
        </form>
        
        <a href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> ¿No tienes cuenta? Regístrate aquí.</a>
    </div>

</body>
</html>



