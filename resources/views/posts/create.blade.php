@extends ('layouts.app')
@section('content')
<div class="container">
    <h1>Nueva Publicación</h1>
    <form action="{{ route(post.store) }}" method="POST">
        @csrf
        <div>
            <label for="title">Título</label>
                <input type="text" name = "title"
                        value = "{{ old('title') }}"
                        maxlength="150" required>
        </div>

        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" value="{{ old('slug' )}}" required>
        </div>

        <div>
            <label>Contenido</label>
            <textarea name="content" rows="6" required>
                {{ old('content') }}
            </textarea>
        </div>

        <div>
            <label>Estado</label>
            <select name="status">
                <option value="draft">Borrador</option>
                <option value="published">Publicado</option>
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection