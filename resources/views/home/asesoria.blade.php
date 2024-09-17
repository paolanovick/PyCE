<!-- resources/views/home/asesoria.blade.php -->
<x-layout>
    <x-slot:title>Asesorías Personalizadas</x-slot:title>

    <h1>Asesorías Personalizadas</h1>
    <div class="row">
        @foreach($asesorias as $asesoria)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $asesoria->titulo }}</h5>
                        <p class="card-text">{{ $asesoria->descripcion }}</p>
                        <p><strong>Precio:</strong> ${{ $asesoria->precio }}</p>
                        <a href="{{ url('/asesorias/'.$asesoria->id) }}" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
