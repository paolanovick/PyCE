<!-- resources/views/vinos/index.blade.php -->

<x-layout>
    <h1>Listado de Vinos</h1>
    <h2>Vinos Ricos</h2>

    <div class="wine-list">
        @foreach($vinos as $vino)
            <div class="wine-item">
                <h3>{{ $vino->nombre }}</h3>
                <p>{{ $vino->descripcion }}</p>
                <p>Precio: ${{ $vino->precio }}</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        @endforeach
    </div>
</x-layout>
