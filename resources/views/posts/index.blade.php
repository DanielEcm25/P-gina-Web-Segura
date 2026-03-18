@extends ('layouts.app')
@section('content')
    <div class="container">
        <h1>Gestión de Publicaciones</h1>
        <a href="{{ route('posts.create') }}">Crear Publicación</a>
        @if(session('ok'))
            <p>{{ session('ok') }}</p>
        @endif
        <hr>
            <table class="tabla">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</tr>
                        <th>Estado</th>
                        <th>Slug</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->slug }}</td>
                            <td class="d.flex gap-2">
                                <a href="{{ route('posts.show',$post->id) }}">Ver</a>
                                <a href="{{ route('posts.edit',$post->id) }}">Editar</a>
                                <form method="POST" action="{{ route('posts.destroy',$post->id) }}">
                                @csrf
                                    @method('DELETE')
                                    <button class="btn btn-del" type="submit" onclick="return confirm('¿Eliminar?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5">No hay publicaciones aún</td>
                            </tr>
                    @endforelse
                </tbody>
            </table>
    </div>
@endsection