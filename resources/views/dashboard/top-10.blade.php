<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="Daniel Esteban Contreras Motoa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('icons/favicon.ico') }}">
    <title>Top 10 Mejores Series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{asset("imgs/home/escudo_UdeC.png")}}" 
                alt="Universidad de Cundinamarca" 
                width="50"
                class="me-2 logo_udec">
            </a>
            <h2 class="author">Bienvenido/a al panel, {{ auth()->user()->name??'Usuario'}} {{ auth()->user()->last_name??'Usuario'}}</h2>
            <div class="d-flex gap-3">
                <a href="{{route('formularios.ir','form-visita')}}" class="btn btn-outline-light">
                Comparte tu serie favorita
                </a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="main-container mt-5">
        <h1 class="text-center mb-4">Mis 10 Series Favoritas</h1>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card got" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Juego de Tronos</h5>
                        <a href="{{ route('series.ir', 'GOT') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <div class="card arcane" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Arcane</h5>
                        <a href="{{ route('series.ir', 'arcane') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <div class="card ST" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Stranger Things</h5>
                        <a href="{{ route('series.ir', 'Stranger_Things') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <div class="card HOTD" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">La Casa del Dragón</h5>
                        <a href="{{ route('series.ir', 'House_of_the_dragon') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <div class="card LOKI" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Loki</h5>
                        <a href="{{ route('series.ir', 'Loki') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <div class="card TLOU" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">The Last of Us</h5>
                        <a href="{{ route('series.ir', 'The_Last_of_Us') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <div class="card Br_Bad" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Breaking Bad</h5>
                        <a href="{{ route('series.ir', 'Breaking_Bad') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <div class="card MK" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Moon Knight</h5>
                        <a href="{{ route('series.ir', 'Moon_Knight') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <div class="card chernobyl" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Chernobyl</h5>
                        <a href="{{ route('series.ir', 'Chernobyl') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <div class="card k7" style="width: 22rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">El Caballero de los 7 Reinos</h5>
                        <a href="{{ route('series.ir', 'The_knight_of_the_seven_kingdoms') }}" class="btn btn-primary">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <footer class="footer mt-5">
        <div class="container text-center">

            <h5 class="mb-3">Top 10 Mejores Series (Opinion personal)</h5>

            <p class="mb-1">
                Elaborado por: <strong>Daniel Esteban Contreras Motoa</strong> - Universidad de Cundinamarca
            </p>

            <p class="mb-0">
                © 2026 - Todos los derechos reservados
            </p>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>
<html xmlns="http://www.w3.org/1999/xhtml"></html>
</html>
