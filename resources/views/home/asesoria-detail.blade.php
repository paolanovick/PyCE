<x-layout title="Detalle de Categoria">
    <h1>Detalle de Asesoría</h1>

    <p><strong>Título:</strong> {{ $asesoria->titulo }}</p>
    <p><strong>Descripción:</strong> {{ $asesoria->descripcion }}</p>
    <p><strong>Precio Mensual:</strong> ${{ $asesoria->precio_mensual }}</p>


    @include('home.asesoria-request')


</x-layout>
