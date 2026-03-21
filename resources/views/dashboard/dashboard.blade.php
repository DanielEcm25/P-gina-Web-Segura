<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Este es el dashboard</h1>
    <p>Conectará con: </p>
    <ul>
        <li>Vista principal de series (main sight) <a href="{{ route('dashboard.ir','main_sight') }}">Aquí</a></li>
        <li>Gestión de posts (layouts.app) <a href="{{ route('posts.index') }}">Aquí</a></li>   
    </ul>
</body>
</html>