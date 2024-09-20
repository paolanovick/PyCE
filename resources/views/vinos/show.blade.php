<!-- resources/views/vinos/show.blade.php -->
<x-layout>
    <x-slot:title>{{ $vino->nombre }}</x-slot:title>

    <div class="container mt-5">
        <h1>{{ $vino->nombre }}</h1>
        <div class="row">
             <div class="col-md-6">
                <img src="{{ asset($vino->imagen) }}" alt="{{ $vino->nombre }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p><strong>Descripción:</strong> {{ $vino->descripcion }}</p>
                <p><strong>Precio:</strong> ${{ $vino->precio }}</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
</x-layout>