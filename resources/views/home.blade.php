@extends('layouts.start')

@section('title', 'Inicio')

@section('content')

<section class="hero d-flex align-items-center text-center text-white">
    <div class="container container-db1">
        <h1 class="display-3 fw-bold">Series para todos</h1>

        <p class="lead mb-4">
            Descubre las mejores series del momento.
        </p>

        <a href="{{ route('auth.ir','login') }}" class="btn btn-success btn-lg">
            Explorar ahora
        </a>
    </div>
</section>
@endsection