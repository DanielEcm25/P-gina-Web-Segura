<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('icons/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <h3 style="color: azure">Top Series</h3>
            <div class="ms-auto">
                <a href="{{route('auth.ir','login')}}" class="btn btn-outline-light me-2 btn-login">Iniciar sesión</a>
                <a href="{{route('auth.ir','register')}}" class="btn btn-success">Registrarse</a>
            </div>
        </div>
    </nav>
    @yield('content')
    @include('partials.footer',['serie' => 'Página de inicio'])
</body>
</html>