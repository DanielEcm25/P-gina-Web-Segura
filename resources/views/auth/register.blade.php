<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('icons/favicon.ico') }}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
</head>
<body>
    <main>
        <h1>Registro de Usuario</h1>
        <form action="{{ route('register.store') }}" method="POST" class="form-register">
            @csrf
            <fieldset>
                <legend>Información básica</legend>
                <label for="nombre">Nombre</label>
                <input type="text" class="nombre" id="nombre" placeholder="Nombre" name="name" value="{{old('name')}}">
                <label for="apellido">Apellido</label>
                <input type="text" class="apellido" id="apellido" placeholder="Apellido" name="last_name" value="{{old('last_name')}}">
            </fieldset>
            <fieldset>
                <legend>Información de contacto</legend>
                <label for="correo">Correo</label>
                <input type="email" placeholder="ejemplo@gmail.com" id="correo" class="correo" name="email" value="{{old('email')}}">
                <label for="correo_confirmado">Confirmar Correo</label>
                <input type="email" placeholder="ejemplo@gmail.com" id="correo-confirmado" class="correo-confirmado">
            </fieldset>
            <fieldset>
                <legend>Contraseña</legend>
                <label for="password">Contraseña</label>
                <input type="password" class="password" id="password" placeholder="Digita tu contraseña" name="password">
                <label for="password-confirmada">Confirmar Contraseña</label>
                <input type="password" class="password-confirmada" id="password-confirmada" placeholder="Confirma tu contraseña" name="password_confirmation">
            </fieldset>
            <label for="t&c">Aceptar terminos y condiciones</label>
            <input type="checkbox" id="t&c" class="t&c">
            <input type="submit" class="enviar" value="Crear Cuenta">
            @if ($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                    <p style="color: #dd2a10">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </form>
    </main>
</body>
</html>