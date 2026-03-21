@extends ('layouts.app')
@section('content')
    <div class="container form-container">
        <h1 class="form-title">Nueva Publicación</h1>
        <form action="{{ route('posts.store') }}" method="POST" class="formulario">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                    <input type="text" name = "title"
                            value = "{{ old('title') }}"
                            maxlength="150" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" value="{{ old('slug' )}}" required>
            </div>

            <div class="form-group">
                <label>Contenido</label>
                <textarea name="content" rows="6" required>
                    {{ old('content') }}
                </textarea>
            </div>

            <div class="form-group">
                <label>Estado</label>
                <select name="status">
                    <option value="draft">Borrador</option>
                    <option value="published">Publicado</option>
                </select>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-submit">Guardar</button>
                <a href="{{ route('posts.index') }}" class="btn-submit back">Volver</a>
            </div>
        </form>
    </div>
@endsection