<x-app :title="'Agregar Blog'">
    <div class="container mt-4">
        <h2>Agregar Nuevo Blog</h2>
<!-- Mostrar la imagen después de ser cargada -->
@if (isset($nombreImagen))
    <div class="mt-3">
        <img src="{{ asset('storage/' . $nombreImagen) }}" alt="Imagen subida" style="max-width: 100%; height: auto;">
    </div>
@endif
        <!-- Formulario para crear un nuevo blog -->
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>

            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido</label>
                <textarea class="form-control" id="contenido" name="contenido" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label for="resumen" class="form-label">Resumen</label>
                <input type="text" class="form-control" id="resumen" name="resumen" required>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar Blog</button>
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-app>

