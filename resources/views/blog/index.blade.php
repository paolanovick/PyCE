<x-app :title="'Blogs'">
    <div class="container mt-4">
        <div class="mb-3">
            <a href="{{ route('blogs.create') }}" class="btn btn-success">Agregar Blog</a>
        </div>
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Contenido</th>
                    <th>Resumen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>
                            <img src="{{ Storage::url($blog->imagen) }}" alt="{{ $blog->titulo }}" style="width: 100px;">
                        </td>
                        <td>{{ $blog->titulo }}</td>
                        <td>{{ $blog->contenido }}</td>
                        <td>{{ $blog->resumen }}</td>
                        <td>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary w-100 p-2 m-2">Editar</a>
                            
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-100 p-2 m-2">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app>
