<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Visita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('icons/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms/form.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{asset("imgs/home/escudo_UdeC.png")}}" 
                alt="Universidad de Cundinamarca" 
                width="50"
                class="me-2 logo_udec">
            </a>
            <h2 class="author">Bienvenido/a al formulario, {{ auth()->user()->name??'Usuario'}} {{ auth()->user()->last_name??'Usuario'}}</h2>
            <a href="{{route('dashboard.ir','main_sight')}}" class="btn btn-outline-light">
                Volver
            </a>
        </div>
    </nav>
    <div class="box">
        <div class="loginbx"> 
            <h2>
                <i class="fa-solid fa-right-to-bracket"></i>
                Formulario de Visita
                <i class="fa-solid fa-heart"></i>
            </h2>
            <p class="subtitle">
                Comparte con nosotros tu película o serie favorita
            </p>
            <form method="POST">
                @csrf
                <label>Información básica</label>
                <div class="input-group">
                    <input type="text" disabled value="{{ auth()->user()->name??'Usuario'}}">
                    <input type="text"  disabled value="{{ auth()->user()->last_name??'Usuario'}}">
                </div>
                <label>Serie o Película</label>
                <select name="OpcionUsuario" required>
                    <option value="serie">Serie</option>
                    <option value="pelicula">Película</option>
                    <option value="otro">Otro</option>
                </select>
                <input type="text" placeholder="Escribe el nombre" required>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modalExito" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
                <h4>Envío Exitoso</h4>
                <p>Gracias por compartir tu serie o película favorita.</p>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    Cerrar
                </button>
            </div>
        </div>
    </div>

    @include('partials.footer',['serie' => 'Formulario de visita'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector("form").addEventListener("submit", function(e) {
            e.preventDefault();
            var modal = new bootstrap.Modal(document.getElementById('modalExito'));
            modal.show();
            this.reset();
        });
    </script>
</body>
<html xmlns="http://www.w3.org/1999/xhtml"></html>
</html>