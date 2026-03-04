<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chernobyl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/chernobyl.css') }}">
    <link rel="icon" href="{{ asset('icons/series/chernobyl.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')

    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>Chernobyl</h1>
            <p class="lead">El precio de la mentira</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2019</li>
                    <li><strong>Temporadas:</strong> 1 (miniserie)</li>
                    <li><strong>Género:</strong> Drama histórico, Thriller, Catástrofe, Suspenso</li>
                    <li><strong>Plataforma:</strong> HBO</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    En abril de 1986, una explosión en la planta nuclear de Chernobyl, en la entonces Unión Soviética, desencadena una de las peores catástrofes nucleares de la historia.
                    La miniserie sigue a científicos, bomberos y funcionarios que arriesgaron sus vidas para contener la radiación y evitar una tragedia aún mayor.
                    Mientras tanto, la burocracia y el encubrimiento político agravan el desastre, demostrando que el mayor peligro no fue solo la radiación… sino la mentira.
            </div>
        </div>
    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card valery">
                    <div class="card-body text-center">
                        <h5>Valery Legasov</h5>
                        <p>Científico encargado</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card boris">
                    <div class="card-body text-center">
                        <h5>Boris Scherbina</h5>
                        <p>Funcionario del gobierno</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card ulana">
                    <div class="card-body text-center">
                        <h5>Ulana Khomyuk</h5>
                        <p>Científica apasionada</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card anatoly">
                    <div class="card-body text-center">
                        <h5>Anatoly Dyatlov</h5>
                        <p>Supervisor de la planta</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'Chernobyl'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>