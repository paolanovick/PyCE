<x-app :title="'Nuevo Club'">
    <div class="container mt-4">
        <h1>Crear Nuevo Club</h1>
        
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

        <form action="{{ route('clubs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Club</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required>{{ old('descripcion') }}</textarea>
            </div>

            <div class="form-group">
                <label for="precio_mensual">Precio Mensual</label>
                <input type="number" name="precio_mensual" id="precio_mensual" class="form-control" step="0.01" value="{{ old('precio_mensual') }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Guardar Club</button>
            <a href="{{ route('clubs.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>
</x-app>
