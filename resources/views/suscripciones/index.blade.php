<x-app :title="'Suscripciones'">
    <div class="container mt-4">
        <div class="mb-3">
            <a href="{{ route('suscripciones.create') }}" class="btn btn-success">Agregar Suscripcion</a>
        </div>
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nomrbe</th>
                    <th>Email</th>
                    <th>Acciones</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($suscripciones as $suscripcion)
                    <tr>
                       
                        <td>{{ $suscripcion->Nombre }}</td>
                        <td>{{ $suscripcion->email }}</td>
                        
                        <td>
                            <a href="{{ route('blogs.edit', $suscripcion->id) }}" class="btn btn-primary">Editar</a>
                            
                            <form action="{{ route('blogs.destroy', $suscripcion->id) }}" method="POST" style="display:inline;">
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
