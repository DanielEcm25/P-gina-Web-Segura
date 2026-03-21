<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('icons/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <div class="user-info">
                <div class="profile-photo">
                </div>
                <h3>{{ Auth::user()->name }}</h3>
                <p>Has iniciado sesión</p>
            </div>
            <nav class="menu">
                <a href="{{ route('posts.index') }}">Gestión de Posts</a>
                <a href="{{route('dashboard.ir','main_sight')}}">Vista Principal</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-a">
                        Cerrar sesión
                    </button>
                </form>
            </nav>
        </aside>
        <main class="contenido">
            <h1>Sección destinada a posts</h1>
            <p>Aquí podrás gestionar y visualizar tus publicaciones.</p>
        </main>
    </div>
</body>
</html>