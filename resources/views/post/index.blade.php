@section('content')
    <div class="container">
        <h1>Gestión de Publicaciones</h1>
        <a href="{{ route('post.create') }}">Crear Publicación</a>
        @if(session('ok'))
            <p>{{ session('ok') }}</p>
        @endif
        <hr>
            <table class="tabla">
                <thead>
                    <th>ID</th>
                    <th>Título</tr>
                    <th>Estado</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>
                                <a href="{{ route('post.show',$post->id) }}">Ver</a>
                                <a href="{{ route('post.edit',$post->id) }}">Editar</a>
                                <form method="POST" action="{{ route('post.destroy',$post->id) }}">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-del" type="submit" onclick="return confirm('¿Eliminar?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection