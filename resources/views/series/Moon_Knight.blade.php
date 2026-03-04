<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moon Knight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/mk.css') }}">
    <link rel="icon" href="{{ asset('icons/series/mk.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')

    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>Moon Knight</h1>
            <p class="lead">Entre el dios y la mente</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2022</li>
                    <li><strong>Temporadas:</strong> 1</li>
                    <li><strong>Género:</strong> Fantasía, Acción, Drama, Ciencia Ficción</li>
                    <li><strong>Plataforma:</strong> Disney +</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    Steven Grant, un hombre con problemas de memoria y episodios extraños, descubre que comparte su cuerpo con otra identidad: Marc Spector, un mercenario vinculado al dios egipcio Khonshu.Mientras las distintas personalidades luchan por el control, deberán enfrentar a un líder religioso decidido a imponer un juicio divino sobre la humanidad.
                    La serie combina acción, mitología egipcia y un profundo enfoque psicológico sobre el trastorno de identidad disociativo.
            </div>
        </div>
    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card steven">
                    <div class="card-body text-center">
                        <h5>Steven Grant</h5>
                        <p>Avatar del dios Khonshu</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card layla">
                    <div class="card-body text-center">
                        <h5>Layla El-Faouly</h5>
                        <p>Arqueóloga y aliada de Steven</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card arthur">
                    <div class="card-body text-center">
                        <h5>Arthur Harrow</h5>
                        <p>Fanático absoluto</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card khonshu">
                    <div class="card-body text-center">
                        <h5>Khonshu</h5>
                        <p>Dios egipcio de la luna</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'Moon Knight'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>