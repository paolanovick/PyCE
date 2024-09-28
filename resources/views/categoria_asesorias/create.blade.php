<x-app :title="'Nueva Asesoria'">
    <div class="container mt-4">
        <h1>Crear Nueva Asesoria</h1>

        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categoria_asesorias.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="precio_mensual">Precio Mensual</label>
                <input type="number" name="precio_mensual" id="precio_mensual" class="form-control" step="0.01"
                    value="{{ old('precio_mensual') }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Guardar Asesoria</button>
            <a href="{{ route('categoria_asesorias.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>
</x-app>
