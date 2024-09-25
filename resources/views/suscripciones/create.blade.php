<x-app>
    <x-slot:title>Crear Suscripción</x-slot:title>

    <h1>Crear Nueva Suscripción</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario para crear una nueva suscripción -->
    <form action="{{ route('suscripciones.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Suscripción</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre de la suscripción" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Informacion</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingresa una descripción de la suscripción" required></textarea>
        </div>

        <div class="mb-3">
            <label for="precio_mensual" class="form-label">Precio Mensual</label>
            <input type="number" class="form-control" id="precio_mensual" name="precio_mensual" step="0.01" placeholder="Ingresa el precio mensual" required>
        </div>

        

        <button type="submit" class="btn btn-primary">Crear Suscripción</button>
    </form>
</x-app>
