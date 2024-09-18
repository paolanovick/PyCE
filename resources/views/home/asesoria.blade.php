
<x-layout title="Asesorías">
    <h1>Asesorías</h1>
    <div class="row">
        @forelse($asesorias as $asesoria)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $asesoria->titulo }}</h5>
                        <p class="card-text">{{ $asesoria->descripcion }}</p>
                        <p><strong>Precio Mensual:</strong> ${{ $asesoria->precio_mensual }}</p>
                        <a href="{{ route('asesorias.show', $asesoria->id) }}" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No hay asesorías disponibles.</p>
        @endforelse
    </div>
</x-layout>