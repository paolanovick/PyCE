<x-layout title="Detalle de Suscripción">
    <h1>Detalle de Suscripción</h1>
    <p><strong>Nombre:</strong> {{ $suscripcion->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $suscripcion->descripcion }}</p>
    <p><strong>Precio:</strong> ${{ $suscripcion->precio }}</p>
    <!-- Más detalles según tus necesidades -->
</x-layout>
