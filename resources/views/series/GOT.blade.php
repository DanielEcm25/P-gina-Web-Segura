<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game of Thrones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/got.css') }}">
    <link rel="icon" href="{{ asset('icons/series/got.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')

    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>Juego de Tronos</h1>
            <p class="lead">Cuando juegas al juego de tronos, ganas o mueres.</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2011</li>
                    <li><strong>Temporadas:</strong> 8</li>
                    <li><strong>Género:</strong> Fantasía, Drama</li>
                    <li><strong>Plataforma:</strong> HBO</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    En un mundo fantástico y en un contexto medieval varias familias, relativas a la nobleza, se disputan el poder para dominar el territorio ficticio de Poniente (Westeros) y tomar el control de los Siete Reinos desde el Trono de Hierro, lugar donde el rey ejerce el poder.
                    Mientras tiene lugar una guerra civil para conseguir el poder, detrás del Muro que divide el reino de Poniente y la zona norte, los muertos amenazan con librar la batalla contra los vivos.
                    Entretanto, Daenerys Targaryen, la hija del antiguo rey, regresa a Poniente para reclamar su lugar y así vengar el deceso de sus ascendientes en la guerra civil anterior.
                </p>
            </div>

        </div>

    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card jon-snow">
                    <div class="card-body text-center">
                        <h5>Jon Snow</h5>
                        <p>El bastardo de Winterfell</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card daenerys">
                    <div class="card-body text-center">
                        <h5>Daenerys Targaryen</h5>
                        <p>La madre de dragones</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card tyrion">
                    <div class="card-body text-center">
                        <h5>Tyrion Lannister</h5>
                        <p>El enano de Casterley Rock</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card bran-stark">
                    <div class="card-body text-center">
                        <h5>Brandon Stark</h5>
                        <p>El vidente de Poniente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'Juego de Tronos'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>