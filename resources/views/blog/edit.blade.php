<!-- resources/views/blog/edit.blade.php -->
<x-layout>
    <x-slot:title>Editar Blog</x-slot:title>

    <div class="container mt-4">
        <h2>Editar Blog</h2>
        
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $blog->titulo }}" required>
            </div>
            
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido</label>
                <textarea class="form-control" id="contenido" name="contenido" rows="5" required>{{ $blog->contenido }}</textarea>
            </div>

            <div class="mb-3">
                <label for="resumen" class="form-label">Resumen</label>
                <textarea class="form-control" id="resumen" name="resumen" rows="3">{{ $blog->resumen }}</textarea>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Blog</button>
        </form>
    </div>
</x-layout>
