<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arcane</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/arcane.css') }}">
    <link rel="icon" href="{{ asset('icons/series/arcane.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')
    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>Arcane</h1>
            <p class="lead">Cuando el progreso tiene un precio</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2021</li>
                    <li><strong>Temporadas:</strong> 2</li>
                    <li><strong>Género:</strong> Drama, Ciencia Ficción</li>
                    <li><strong>Plataforma:</strong> Netflix</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    Arcane es una serie de animación basada en el exitoso videojuego League of Legends o también conocido popularmente como Lol. La historia se centra principalmente en dos ciudades: en la rica y equilibrada Piltover y el sórdido corazón de Zaun.
                    Las tensiones entre ambas ciudades crecen aún más con la creación de hextech, la forma en la que cualquier persona puede controlar la energía mágica; y por otro lado en Zaun aparece una nueva droga llamada shimmer que transforma a los humanos en monstruos.
                </p>
            </div>

        </div>

    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card vi">
                    <div class="card-body text-center">
                        <h5>Vi</h5>
                        <p>El Puño  de Zaun</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card jinx">
                    <div class="card-body text-center">
                        <h5>Jinx</h5>
                        <p>El Eco de Powder</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card jayce">
                    <div class="card-body text-center">
                        <h5>Jayce Talis</h5>
                        <p>El Martillo del Progreso</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card viktor">
                    <div class="card-body text-center">
                        <h5>Viktor</h5>
                        <p>El Visionario Trágico</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'Arcane'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>