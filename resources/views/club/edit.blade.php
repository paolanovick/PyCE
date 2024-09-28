<!-- resources/views/club/edit.blade.php -->
<x-app>
    <x-slot:title>Editar Club</x-slot:title>

    <div class="container mt-4">
        <h2>Editar Club</h2>
        
        <form action="{{ route('clubs.update', $club->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $club->nombre }}" required>
            </div>
            
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="5" required>{{ $club->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label for="precio_mensual" class="form-label">Precio mensual</label>
                <input type="number" step="0.01" class="form-control" id="precio_mensual" name="precio_mensual" value="{{ $club->precio_mensual }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar suscripción</button>
        </form>
    </div>
</x-app>
