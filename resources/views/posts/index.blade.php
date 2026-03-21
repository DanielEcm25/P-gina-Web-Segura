@extends ('layouts.app')
@section('page','gestión de publicaciones')
@section('content')
    <div class="container">
        <a class="btn btn-outline-light" href="{{ route('posts.create') }}">Crear Publicación</a>
        <hr>
        @if(session('ok'))
            <p>{{ session('ok') }}</p>
        @endif
            <table class="Tabla">
                <thead>
                    <tr style="width: 12px">
                        <th>ID</th>
                        <th>Título</th>
                        <th>Estado</th>
                        <th>Slug</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr class="row-items">
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->slug }}</td>
                            <td class="d-flex gap-2 acciones">
                                <a href="{{ route('posts.show',$post->id) }}" title="Ver" class="btn-accion ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('posts.edit',$post->id) }}" title="Editar" class="btn-accion editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form method="POST" action="{{ route('posts.destroy',$post->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-accion eliminar" type="submit" onclick="return confirm('¿Eliminar?')" title="Eliminar">
                                        <i class="bi bi-trash"></i>
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