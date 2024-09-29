<x-layout title="Detalle de Asesoría">
    <h1>Detalle de Asesoría</h1>
    <p><strong>Título:</strong> {{ $asesoria->titulo }}</p>
    <p><strong>Descripción:</strong> {{ $asesoria->descripcion }}</p>
    <p><strong>Precio Mensual:</strong> ${{ $asesoria->precio_mensual }}</p>

    <!-- Botón para solicitar la asesoría -->
    <a href="{{ route('asesorias.request', $asesoria->id) }}" class="btn btn-primary-violeta">Solicitar Asesoría</a>



</x-layout>
