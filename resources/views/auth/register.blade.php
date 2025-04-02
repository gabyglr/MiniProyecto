<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="{{ asset('css/style_register.css') }}" rel="stylesheet">
</head>
<body>

    <div class="register-container">
        <h1><i class="fa-solid fa-user-plus"></i> Registrarse</h1>

        {{-- Mensaje de éxito --}}
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        {{-- Mensajes de error --}}
        @if($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-group">
                <i class="fa-solid fa-user"></i>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
            </div>

            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Correo Electrónico">
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input id="password" type="password" name="password" required minlength="8" placeholder="Contraseña (mínimo 8 caracteres)">
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input id="password_confirmation" type="password" name="password_confirmation" required minlength="8" placeholder="Confirmar Contraseña">
            </div>

            <button type="submit"><i class="fa-solid fa-user-check"></i> Registrarse</button>
        </form>

        <a href="{{ route('login') }}"><i class="fa-solid fa-arrow-left"></i> ¿Ya tienes cuenta? Inicia sesión aquí.</a>
    </div>

</body>
</html>
