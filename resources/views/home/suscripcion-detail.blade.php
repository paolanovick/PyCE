<x-layout>
    <x-slot:title>Detalle de Suscripción</x-slot:title>

    <h1>Detalle de Suscripción</h1>
    <p><strong>Nombre:</strong> {{ $suscripcion->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $suscripcion->descripcion }}</p>
    <p><strong>Precio:</strong> ${{ $suscripcion->precio }}</p>

    <!-- Podrías agregar un botón aquí para suscribirse -->
    <a href="{{ route('suscripcion.index') }}" class="btn btn-primary">Volver a Suscripciones</a>
</x-layout>
