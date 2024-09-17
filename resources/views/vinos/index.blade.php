<!-- resources/views/vinos/index.blade.php -->
<x-layout>
    <x-slot:title>Listado de Vinos</x-slot:title>

    <h1>Vinos Ricos</h1>
    <div class="row">
        @foreach($vinos as $vino)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ url('path-to-your-image/' . $vino->imagen) }}" class="card-img-top" alt="{{ $vino->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $vino->nombre }}</h5>
                        <p class="card-text">${{ $vino->precio }}</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
