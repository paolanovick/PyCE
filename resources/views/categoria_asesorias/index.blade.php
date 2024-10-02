<x-app :title="'Asesoria'">
    <div class="container mt-4">
        <div class="mb-3">
            <a href="{{ route('categoria_asesorias.create') }}" class="btn btn-success">Nueva Categoria de Asesoria</a>
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
                @foreach ($categoria_asesorias as $categoria_asesoria)
                    <tr>

                        <td>{{ $categoria_asesoria->nombre }}</td>
                        <td>{{ $categoria_asesoria->descripcion }}</td>
                        <td>{{ $categoria_asesoria->precio_mensual }}</td>
                        <td>
                            <a href="{{ route('categoria_asesorias.edit', ['categoria_asesoria' => $categoria_asesoria]) }}"
                                class="btn btn-primary w-100 p-2 m-2">Editar</a>

                            <form
                                action="{{ route('categoria_asesorias.destroy', ['categoria_asesoria' => $categoria_asesoria]) }}"
                                method="POST" style="display:inline;">
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
