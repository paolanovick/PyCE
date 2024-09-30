<x-layout title="Detalle de Categoria">
    <h1>Detalle de Asesoría</h1>

    <p><strong>Título:</strong> {{ $categoriaasesoria->titulo }}</p>
    <p><strong>Descripción:</strong> {{ $categoriaasesoria->descripcion }}</p>
    <p><strong>Precio Mensual:</strong> ${{ $categoriaasesoria->precio_mensual }}</p>


    @include('asesoria.asesoria-request')


</x-layout>
