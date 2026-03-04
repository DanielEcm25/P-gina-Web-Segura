<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Last Of Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/tlou.css') }}">
    <link rel="icon" href="{{ asset('icons/series/tlou.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')

    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>The Last Of Us</h1>
            <p class="lead">Cuando estás perdido en la oscuridad, busca la luz</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2023</li>
                    <li><strong>Temporadas:</strong> 2</li>
                    <li><strong>Género:</strong> Drama, Ciencia Ficción, postacopalíptico</li>
                    <li><strong>Plataforma:</strong> HBO</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    Tras el colapso de la civilización provocado por una infección fúngica que transforma a los humanos en criaturas violentas, el mundo queda reducido a zonas militarizadas y territorios controlados por supervivientes.
                    Joel Miller, un hombre marcado por la pérdida, recibe la misión de escoltar a Ellie Williams, una adolescente que podría ser la clave para salvar a la humanidad.
                    Lo que comienza como una tarea se convierte en un viaje emocional donde ambos deberán enfrentarse no solo a infectados y saqueadores, sino también a sus propios traumas y decisiones morales.
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card joel">
                    <div class="card-body text-center">
                        <h5>Joel Miller</h5>
                        <p>Superviviente de la tragedia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card ellie">
                    <div class="card-body text-center">
                        <h5>Ellie Williams</h5>
                        <p>Una última esperanza</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card tess">
                    <div class="card-body text-center">
                        <h5>Tess Servopoulos</h5>
                        <p>Compañera de Joel</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card abby">
                    <div class="card-body text-center">
                        <h5>Abby Anderson</h5>
                        <p>Personaje vengativo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'The Last of Us'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>