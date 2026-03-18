<nav class="navbar navbar-expand-lg">
    <div class="container">
            <a href="{{ route('dashboard.ir','main_sight') }}" class="btn btn-outline-light">
                Volver
            </a>
                <h2 class="author">Has iniciado sesión como: {{ auth()->user()->name??'Usuario'}} {{ auth()->user()->last_name??'Usuario'}}</h2>
            <a href="{{route('formularios.ir','form-visita')}}" class="btn btn-outline-light">
                Comparte tu serie favorita
            </a>
    </div>
</nav>