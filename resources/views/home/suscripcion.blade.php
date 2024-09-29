<x-layout>
    <x-slot:title>Detalle de Club</x-slot:title>

    <h1>Detalle de Club</h1>
    <p><strong>Nombre:</strong> {{ $club->nombre }}</p>
    <p><strong>Descripcion:</strong> {{ $club->descripcion }}</p>
    <p><strong>Precio mensual:</strong> {{ $club->precio_mensual }}</p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

 <div class="row mb-4 text-center">
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

    
    <div class="row">
        @foreach($clubes as $club)
            <div class="col-md-12"> 
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $club->nombre }}</h5>
                        <p class="card-text">{{ $club->descripcion }}</p>
                        <p><strong>Precio Mensual:</strong> ${{ $club->precio_mensual }}</p>
                        <a href="{{ url('/suscripcion/'.$club->id) }}" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Formulario para crear una nueva suscripción -->
    <h2>Crear Nueva Suscripción</h2>
    <form action="{{ route('suscripcion.store') }}" method="POST">
        @csrf
        <input type="hidden" id="club" name="club" value="{{ $club->id }}">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="plan">Selecciona tu plan de suscripción</label>
            <select class="form-control" id="plan" name="plan" required>
                <option value="" disabled selected>Elige un plan</option>
                <option value="clasica">Suscripción Clásica</option>
                <option value="premium">Suscripción Premium</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Suscribirse</button>
    </form>


</x-layout>
