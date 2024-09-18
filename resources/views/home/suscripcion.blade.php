<x-layout>
    <x-slot:title>Club de Vinos</x-slot:title>

    <h1>Club de Vinos</h1>
    <div class="row">
        @foreach($clubes as $club)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $club->nombre }}</h5>
                        <p class="card-text">{{ $club->descripcion }}</p>
                        <p><strong>Precio Mensual:</strong> ${{ $club->precio_mensual }}</p>
                        <a href="{{ url('/suscripcion/'.$club->id) }}" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Formulario para crear una nueva suscripción -->
    <h2>Crear Nueva Suscripción</h2>
    <form action="{{ route('suscripcion.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Suscribirse</button>
    </form>
</x-layout>
