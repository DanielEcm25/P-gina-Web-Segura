<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Panel</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="{{ route('dashboard.ir','main_sight') }}">Dashboard</a>
        <a href="{{ route('dashboard.ir','main_sight') }}">Vista Principal</a>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>Cerrar Sesión</button>
    </form>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>