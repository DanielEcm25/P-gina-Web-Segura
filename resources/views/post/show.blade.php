@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detalle del Post</h1>

    <p><strong>ID:</strong> {{ $post->id }}</p>
    <p><strong>Título:</strong> {{ $post->title }}</p>
    <p><strong>Slug:</strong> {{ $post->slug }}</p>
    <p><strong>Estado:</strong> {{ $post->status }}</p>

    <p><strong>Contenido:</strong></p>
    <p>{{ $post->content }}</p>

    <hr>

    <a href="{{ route('post.index') }}">Volver</a>
    <a href="{{ route('post.edit', $post->id) }}">Editar</a>

    <form method="POST" action="{{ route('post.destroy', $post->id) }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Eliminar este post?')">
            Eliminar
        </button>
    </form>
</div>
@endsection