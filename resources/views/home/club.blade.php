<x-layout>
    <x-slot:title>Club de Vinos</x-slot:title>

    <h1>Club de Vinos</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div id="infoCarrusel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row text-center">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="border border-danger p-3 flex-fill">
                            <i class="fas fa-grapes"></i>
                            <h5 class="mt-2">Elegí la suscripción que más te guste</h5>
                            <p>Conocé cada una de nuestras propuestas.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="border border-danger p-3 flex-fill">
                            <i class="fas fa-glass-cheers"></i>
                            <h5 class="mt-2">Recibí todos los meses distintos vinos</h5>
                            <p>Con envío sin cargo a todo el país.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="border border-danger p-3 flex-fill">
                            <i class="fas fa-wine-glass-alt"></i>
                            <h5 class="mt-2">Disfrutá de beneficios exclusivos</h5>
                            <p>Descuentos, degustaciones y contenido sobre el mundo del vino.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#infoCarrusel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#infoCarrusel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="row">
        @foreach ($clubes as $club)
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $club->nombre }}</h5>
                        <p class="card-text">{{ $club->descripcion }}</p>
                        <p><strong>Precio Mensual:</strong> ${{ $club->precio_mensual }}</p>
                        <a href="{{ route('home.formsuscripcion', ['club' => $club]) }}" class="btn " style="margin: 30px; background-color: #800000; color:white">Más
                            Información</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Formulario para crear una nueva suscripción -->

</x-layout>
