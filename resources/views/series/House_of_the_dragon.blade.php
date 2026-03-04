<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Casa del Dragón</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series/HOTD.css') }}">
    <link rel="icon" href="{{ asset('icons/series/hotd.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')
    
    <div class="serie-hero">
        <div class="overlay"></div>
        <div class="container text-center text-white hero-content">
            <h1>La Casa del Dragón</h1>
            <p class="lead">En Poniente, la sangre de dragón no olvida.</p>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6 info-container">
                <h3>Información</h3>
                <ul>
                    <li><strong>Año:</strong> 2022</li>
                    <li><strong>Temporadas:</strong> 2</li>
                    <li><strong>Género:</strong> Fantasía, Drama</li>
                    <li><strong>Plataforma:</strong> HBO</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Sinopsis</h3>
                <p>
                    Ambientada casi dos siglos antes de los acontecimientos de Game of Thrones, la serie narra el inicio de la caída de la poderosa Casa Targaryen.
                    Cuando el rey Viserys I Targaryen nombra heredera a su hija Rhaenyra Targaryen, rompe con la tradición patriarcal del reino.
                    Años después, la ambición, las alianzas políticas y el orgullo familiar desatan una guerra civil conocida como la Danza de los Dragones, enfrentando a sangre contra sangre en una lucha por el Trono de Hierro.
                    Es una historia de poder, traición, fuego y destino, donde la familia más temida de Poniente termina consumida por su propio fuego.
                </p>
            </div>

        </div>

    </div>

    <div class="container mt-5 characters-container">
        <h2 class="text-center mb-4">Personajes Principales</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card personaje-card rhaenyra">
                    <div class="card-body text-center">
                        <h5>Rhaenyra Targaryen</h5>
                        <p>Heredera al trono</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card daemon">
                    <div class="card-body text-center">
                        <h5>Daemon Targaryen</h5>
                        <p>Hermano del rey</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card alicent">
                    <div class="card-body text-center">
                        <h5>Alicent Hightower</h5>
                        <p>Reina consorte</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card personaje-card viserys">
                    <div class="card-body text-center">
                        <h5>Viserys I Targaryen</h5>
                        <p>Rey de Poniente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'La Casa del Dragón'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
</html>