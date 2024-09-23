<x-layout title="Detalle de Categoria">
    <h1>Detalle de Asesoría</h1>

    <p><strong>Título:</strong> T.{{ $categoriaAsesoria->titulo }}</p>
    <p><strong>Descripción:</strong> D.{{ $categoriaAsesoria->descripcion }}</p>
    <p><strong>Precio Mensual:</strong> P.${{ $categoriaAsesoria->precio_mensual }}</p>


    @include('asesoria.asesoria-request')


</x-layout>
