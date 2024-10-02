<x-layout :title="'Vinos'">

    <h1>Listado de Vinos</h1>
    <h2>Vinos Ricos</h2>



   <div class="row">
    @foreach ($vinos as $vino)
        <div class="col-md-4 p-2">
            <div class="card mb-4 h-100 p-2 ">
                <img src="{{ Storage::disk('imagenes')->url($vino->imagen) }}" alt="{{ $vino->nombre }}"
                    class="card-img-top vino-imagen w-50 mx-auto  " >
                <div class="card-body">
                    <h3 class="card-title">{{ $vino->nombre }}</h3>
                    <p class="card-text">{{ $vino->descripcion }}</p>
                    <p class="card-text"><strong>Precio:</strong> ${{ $vino->precio }}</p>
                </div>
                <div class="card-footer text-center"> <!-- Agregar un footer para el botón -->
                    <a href="{{ route('listavinos.show', $vino) }}" class="btn" style="background-color: #800000; color:white">Comprar</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

</x-layout>
