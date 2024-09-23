<div title="Solicitar Asesoría">
    <h1>Solicitar Asesoría</h1>
    <p>Para inscribirte en la asesoría {{ $categoriaAsesoria->titulo }}, por favor completa el siguiente formulario:</p>

    <form action="{{ route('asesoria.store') }}" method="POST">
        @csrf
        <input type="hidden" name="categoriaasesoria_id" value="{{ $categoriaAsesoria->id }}">

        <div class="form-group">
            <label for="titulo">Nombre y Apellido:</label>
            <input type="text" id="nombreyapellido" name="nombre_apellido" class="form-control" required>
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

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
