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


    <h2>Inscribite</h2>
    <form method="POST" action="{{ route('home.inscripcion') }}">
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

        <button type="submit" class="btn btn-primary" style="margin: 30px; background-color: #800000;">Suscribirse</button>
    </form>


</x-layout>
