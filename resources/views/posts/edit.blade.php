@extends('layouts.app')
@section('page','editar publicación #'.$post->id)
@section('content')
    <div class="container form-container">
        <h1 class="form-title">Editar publicación</h1>
        <form method="POST" action="{{ route('posts.update',$post->id) }}" class="formulario">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Título</label>
                <input type="text" name="title"
                        value="{{ old('title', $post->title) }}"
                        maxlength="150" required>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug"
                        value="{{ old('slug', $post->slug) }}" required>
            </div>
            <div class="form-group">
                <label>Contenido</label>
                <textarea name="content" rows="6">
                    {{ old('content', $post->content) }}
                </textarea>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <select name="status">
                    <option value="draft"
                        {{ $post->status == 'draft' ? 'selected' : '' }}>
                        Borrador
                    </option>
                    <option value="published"
                        {{ $post->status == 'published' ? 'selected' : '' }}>
                        Publicado
                    </option>
                </select>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-submit">Actualizar</button>
                <a href="{{ route('posts.index') }}" class="btn-submit back">Volver</a>
            </div>   
    </form>
    </div>
@endsection