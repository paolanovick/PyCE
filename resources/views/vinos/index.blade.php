<x-app :title="'Vinos'">

     <div class="container mt-4">
        <!-- Botón para agregar un nuevo vino -->
        <div class="mb-3">
            <a href="{{ route('vinos.create') }}" class="btn btn-success">Agregar Vino</a>
        </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vinos as $vino)
                    <tr>
                        <!-- Columna para la imagen -->
                        <td>
                            <img src="{{ Storage::disk('imagenes')->url($vino->imagen) }}" alt="{{ $vino->nombre }}" class="vino-imagen" style="width: 100px; height: auto;">
                        </td>
                        <!-- Columna para el nombre -->
                        <td>{{ $vino->nombre }}</td>
                        <!-- Columna para la descripción -->
                        <td>{{ $vino->descripcion }}</td>
                        <!-- Columna para el precio -->
                        <td>${{ $vino->precio }}</td>
                        <!-- Columna para los botones de editar y eliminar -->
                        <td>
                            <a href="{{ route('vinos.edit', $vino->id) }}" class="btn btn-primary p-2 w-100 p-2 m-2">Editar</a>

                            <form action="{{ route('vinos.destroy', $vino->id) }}" method="POST" style="display:inline;">
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
