<!-- resources/views/vinos/create.blade.php -->

<x-app :title="'Crear Vino'">

    <div class="container mt-5">
        <h1>Crear Nuevo Vino</h1>

        <form action="{{ route('vinos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
            </div>

            <div class="mb-3">
                <label for="notas_de_cata" class="form-label">Notas de Cata</label>
                <textarea class="form-control" id="notas_de_cata" name="notas_de_cata" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="sugerencias_de_acompaniamiento" class="form-label">Sugerencias de Acompañamiento</label>
                <textarea class="form-control" id="sugerencias_de_acompaniamiento" name="sugerencias_de_acompaniamiento" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="cosecha" class="form-label">Cosecha</label>
                <input type="text" class="form-control" id="cosecha" name="cosecha">
            </div>

            <div class="mb-3">
                <label for="variedad" class="form-label">Variedad</label>
                <input type="text" class="form-control" id="variedad" name="variedad">
            </div>

            <div class="mb-3">
                <label for="crianza" class="form-label">Crianza</label>
                <input type="text" class="form-control" id="crianza" name="crianza">
            </div>

            <div class="mb-3">
                <label for="potencial_guarda" class="form-label">Potencial de Guarda</label>
                <input type="text" class="form-control" id="potencial_guarda" name="potencial_guarda">
            </div>

            <button type="submit" class="btn btn-primary">Crear Vino</button>
        </form>
    </div>

</x-app>
