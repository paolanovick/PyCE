<x-layout title="Solicitar Asesoría">
    <h1>Solicitar Asesoría</h1>
    <p>Para inscribirte en la asesoría {{ $asesoria->titulo }}, por favor completa el siguiente formulario:</p>
    <!-- Aquí puedes agregar el formulario de inscripción -->
    <form action="{{ route('asesoria.store') }}" method="POST">
        @csrf
        <input type="hidden" name="asesoria_id" value="{{ $asesoria->id }}">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="resumen">Resumen:</label>
            <textarea id="resumen" name="resumen" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <textarea id="contenido" name="contenido" class="form-control" required></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
    </form>
</x-layout>
