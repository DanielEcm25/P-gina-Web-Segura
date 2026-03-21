<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icons/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>Panel</title>
</head>
<body>
    <nav class="navbar navbar-posts">
        <h1 class="h1-post">{{ auth()->user()->name??'Usuario'}}, estás en: @yield('page')</h1>
        <div class="items-navbar">
            <a class="btn btn-outline-light" href="{{ route('dashboard.go') }}">Dashboard</a>
            <a href="{{ route('dashboard.ir','main_sight') }}" class="btn btn-outline-light">Vista Principal</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light logout">Cerrar Sesión</button>
            </form>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>