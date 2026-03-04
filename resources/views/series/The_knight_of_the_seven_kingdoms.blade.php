<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Caballero de los 7 Reinos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/7k.css') }}">
    <link rel="icon" href="{{ asset('icons/series/7k.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')

    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>El Caballero de los 7 Reinos</h1>
            <p class="lead">Un cuento que se convirtió en leyenda</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2025</li>
                    <li><strong>Temporadas:</strong> 1</li>
                    <li><strong>Género:</strong> Fantasía, Aventura, Drama Medieval</li>
                    <li><strong>Plataforma:</strong> HBO</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    Ambientada casi un siglo antes de Game of Thrones y décadas antes de La Casa del Dragón, la serie sigue las aventuras de Ser Duncan el Alto y su joven escudero Egg.
                    En una época donde los Targaryen aún gobiernan los Siete Reinos, los dragones casi han desaparecido y el reino vive una relativa paz. Sin embargo, torneos, conspiraciones y conflictos políticos revelan que incluso en tiempos tranquilos, el poder y el honor pueden entrar en conflicto.
                    Es una historia más íntima y caballeresca, centrada en la lealtad, la justicia y la construcción de la leyenda.
            </div>
        </div>
    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card dunk">
                    <div class="card-body text-center">
                        <h5>Duncan el Alto</h5>
                        <p>Caballero humilde pero honorable</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card egg">
                    <div class="card-body text-center">
                        <h5>Egg</h5>
                        <p>Joven que viaja como escudero</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card aeryon">
                    <div class="card-body text-center">
                        <h5>Aeryon Targaryen</h5>
                        <p>Principe arrogante y peligroso</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card baelor">
                    <div class="card-body text-center">
                        <h5>Baelor Targaryen</h5>
                        <p>Heredero al trono</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'El Caballero de los 7 Reinos'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>