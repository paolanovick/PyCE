<!-- resources/views/home/suscripcion.blade.php -->
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
</x-layout>
