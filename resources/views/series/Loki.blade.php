<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/loki.css') }}">
    <link rel="icon" href="{{ asset('icons/series/loki.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')

    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>Loki</h1>
            <p class="lead">El caos no tiene línea temporal</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2021</li>
                    <li><strong>Temporadas:</strong> 2</li>
                    <li><strong>Género:</strong> Fantasía, Drama, Ciencia Ficción</li>
                    <li><strong>Plataforma:</strong> Disney +</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    Después de escapar con el Teseracto en una línea temporal alterna, Loki es capturado por la Autoridad de Variación Temporal (TVA), una organización que vigila el flujo del tiempo.
                    Obligado a colaborar para detener una amenaza mayor, el Dios del Engaño deberá enfrentarse no solo a otras variantes de sí mismo, sino también a la verdad sobre el libre albedrío, el destino y su propio propósito en el multiverso.
                    La serie transforma al villano clásico en un personaje complejo que lucha entre el caos y la redención.
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card loki">
                    <div class="card-body text-center">
                        <h5>Loki</h5>
                        <p>Dios del engaño</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card sylvie">
                    <div class="card-body text-center">
                        <h5>Sylvie</h5>
                        <p>Variante temporal</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card mobius">
                    <div class="card-body text-center">
                        <h5>Mobius</h5>
                        <p>Agente de la TVA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card kang">
                    <div class="card-body text-center">
                        <h5>Kang</h5>
                        <p>Arquitecto temporal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'Loki'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>