<div title="Solicitar Asesoría">
    <h1>Solicitar Asesoría</h1>
    <p>Para inscribirte en la asesoría {{ $categoriaasesoria->titulo }}, por favor completa el siguiente formulario:</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('home.registrarasesoria') }}" method="POST">
        @csrf
        <input type="hidden" name="categoriaasesoria_id" value="{{ $categoriaasesoria->id }}">

        <div class="form-group">
            <label for="nombre">Nombre y Apellido:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
    </form>


</div>
