<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Breaking Bad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/b_bad.css') }}">
    <link rel="icon" href="{{ asset('icons/series/b_bad.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')

    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>Breaking Bad</h1>
            <p class="lead">Todo hombre tiene un precio</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2008</li>
                    <li><strong>Temporadas:</strong> 5</li>
                    <li><strong>Género:</strong> Drama, Ciencia Ficción, Acción</li>
                    <li><strong>Plataforma:</strong> AMC, Netflix</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    Cuando Walter White, un profesor de química frustrado, es diagnosticado con cáncer terminal, decide asegurar el futuro económico de su familia de la manera más inesperada: fabricando metanfetamina.
                    Junto a su exalumno Jesse Pinkman, se adentra en el mundo del narcotráfico, donde su inteligencia lo convierte en un jugador cada vez más poderoso… y peligroso.
                    Lo que comienza como un acto desesperado se transforma en una caída moral imparable, donde el orgullo y la ambición revelan su verdadera naturaleza.
            </div>
        </div>
    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card walter">
                    <div class="card-body text-center">
                        <h5>Walter White</h5>
                        <p>Alias: Heisenberg</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card jesse">
                    <div class="card-body text-center">
                        <h5>Jesse Pinkman</h5>
                        <p>Socio de Walter</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card skyler">
                    <div class="card-body text-center">
                        <h5>Skyler White</h5>
                        <p>Esposa de Walter</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card fring">
                    <div class="card-body text-center">
                        <h5>Gustavo Fring</h5>
                        <p>Empresario meticuloso</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'Breaking Bad'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>