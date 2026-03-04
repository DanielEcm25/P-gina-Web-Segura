<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('icons/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <title>Inicio de sesión</title>
</head>
<body>
    <main>
        <div class="logo"></div>
        <h1>Inicio de Sesión</h1>
        <form action="{{ route('login.store') }}" method="POST" class="form-register">
            @csrf
            <label for="correo">Correo Electrónico</label>
            <input type="email" placeholder="ejemplo@gmail.com" id="correo" class="correo" name="email">
            <label for="password">Contraseña</label>
            <input type="password" class="password" id="password" placeholder="Digita tu contraseña" name="password">
            <input type="submit" class="enviar" value="Iniciar Sesión">
            <label for="register">¿No tienes una cuenta?</label>
            <a id="register" href="{{ route('auth.ir','register') }}">Regístrate aquí</a>
        </form>
        @if ($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                    <p style="color: #dd2a10">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
    </main>
</body>
</html>