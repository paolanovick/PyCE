<x-app :title="'Blogs'">
    <div class="container mt-4">
        <div class="mb-3">
            <a href="{{ route('clubs.create') }}" class="btn btn-success">Nuevo Club</a>
        </div>
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>                    
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio mensual</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clubs as $club)
                    <tr>
                       
                        <td>{{ $club->nombre }}</td>
                        <td>{{ $club->descripcion }}</td>
                        <td>{{ $club->precio_mensual }}</td>
                        <td>
                            <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-primary">Editar</a>
                            
                            <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app>
