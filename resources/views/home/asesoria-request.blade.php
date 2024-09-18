<!-- resources/views/home/asesoria-request.blade.php -->
<x-layout>
    <x-slot:title>Solicitar Asesoría</x-slot:title>

    <h1>Solicitar Asesoría</h1>
    <form action="{{ route('asesorias.store') }}" method="POST">
        @csrf
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
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="text" id="imagen" name="imagen" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
    </form>
</x-layout>
