<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stranger Things</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/ST.css') }}">
    <link rel="icon" href="{{ asset('icons/series/st.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')

    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>Stranger Things</h1>
            <p class="lead">En Hawkins, la oscuridad siempre encuentra el camino de regreso</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2016</li>
                    <li><strong>Temporadas:</strong> 5</li>
                    <li><strong>Género:</strong> Fantasía, Drama, Ciencia Ficción</li>
                    <li><strong>Plataforma:</strong>Netflix</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    Stranger Things es una serie de ciencia ficción y terror ambientada en los años 80 en Hawkins, Indiana, donde un grupo de amigos —Mike, Dustin, Lucas y Will— lucha contra monstruos de una dimensión paralela llamada "El Mundo del Revés" (Upside Down). Tras la desaparición de Will y la aparición de Eleven, una niña con poderes telequinéticos, el grupo, junto con Joyce, Hopper y adolescentes locales, busca cerrar los portales sobrenaturales creados por experimentos secretos del gobierno.
                </p>
            </div>

        </div>

    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card once">
                    <div class="card-body text-center">
                        <h5>Once</h5>
                        <p>Eleven</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card mike">
                    <div class="card-body text-center">
                        <h5>Mike</h5>
                        <p>Michael Wheeler</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card dustin">
                    <div class="card-body text-center">
                        <h5>Dustin</h5>
                        <p>Dustin Henderson</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card hopper">
                    <div class="card-body text-center">
                        <h5>Hopper</h5>
                        <p>Jim Hopper</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'Stranger Things'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>