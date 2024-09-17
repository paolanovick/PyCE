<x-layout title="Suscripción">
    <h1>Club de Vinos</h1>
    <div class="row">
        @forelse($clubes as $club)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $club->nombre }}</h5>
                        <p class="card-text">{{ $club->descripcion }}</p>
                        <p><strong>Precio Mensual:</strong> ${{ $club->precio_mensual }}</p>
                        <a href="{{ route('club-vinos.show', $club->id) }}" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No hay clubes de vino disponibles.</p>
        @endforelse
    </div>
</x-layout>
