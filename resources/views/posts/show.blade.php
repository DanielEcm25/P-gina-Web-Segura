@extends('layouts.app')
@section('page','ver publicación #'.$post->id)
@section('content')
<div class="post-container">
    <div class="first-container">
        <h1 class="titulo-post"> {{ $post->title }}</h1>
        <div class="form-actions volver-index">
            <a href="{{ route('posts.index') }}" class="btn-submit back">Volver</a>
        </div>
    </div>
    <p class="slug-post"> {{ $post->slug }}</p>
    <div class="border p-3 contenido-post">
        {!! nl2br(e($post->content)) !!}
    </div>
</div>
@endsection