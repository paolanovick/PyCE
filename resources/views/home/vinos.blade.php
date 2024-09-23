<x-layout :title="'Vinos'">

    <h1>Listado de Vinos</h1>
    <h2>Vinos Ricos</h2>



    <div class="row">
        @foreach ($vinos as $vino)
            <div class="col-md-4">

                <div class="card mb-4">
                    <img src="{{ Storage::disk('imagenes')->url($vino->imagen) }}" alt="{{ $vino->nombre }}"
                        class="card-img-top vino-imagen">
                    <div class="card-body">
                        <h3 class="card-title">{{ $vino->nombre }}</h3>
                        <p class="card-text">{{ $vino->descripcion }}</p>
                        <p class="card-text"><strong>Precio:</strong> ${{ $vino->precio }}</p>
                        <a href="{{ route('listavinos.show', $vino->id) }}" class="btn btn-primary">Comprar</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
