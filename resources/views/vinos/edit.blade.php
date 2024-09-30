<!-- resources/views/vinos/edit.blade.php -->

<x-app :title="'Editar Vino'">

    <div class="container mt-5">
        <h1>Editar Vino</h1>

        <!-- El formulario debe enviar una solicitud PUT o PATCH -->
        <form action="{{ route('vinos.update', $vino->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Importante para hacer una actualización -->

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $vino->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $vino->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" value="{{ $vino->precio }}" required>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                <!-- Muestra la imagen actual si existe -->
                @if($vino->imagen)
                    <img src="{{ asset('storage/' . $vino->imagen) }}" alt="Imagen del vino" class="img-thumbnail mt-2" width="150">
                @endif
            </div>

            <div class="mb-3">
                <label for="notas_de_cata" class="form-label">Notas de Cata</label>
                <textarea class="form-control" id="notas_de_cata" name="notas_de_cata" rows="3">{{ $vino->notas_de_cata }}</textarea>
            </div>

            <div class="mb-3">
                <label for="sugerencias_de_acompaniamiento" class="form-label">Sugerencias de Acompañamiento</label>
                <textarea class="form-control" id="sugerencias_de_acompaniamiento" name="sugerencias_de_acompaniamiento" rows="3">{{ $vino->sugerencias_de_acompaniamiento }}</textarea>
            </div>

            <div class="mb-3">
                <label for="cosecha" class="form-label">Cosecha</label>
                <input type="text" class="form-control" id="cosecha" name="cosecha" value="{{ $vino->cosecha }}">
            </div>

            <div class="mb-3">
                <label for="variedad" class="form-label">Variedad</label>
                <input type="text" class="form-control" id="variedad" name="variedad" value="{{ $vino->variedad }}">
            </div>

            <div class="mb-3">
                <label for="crianza" class="form-label">Crianza</label>
                <input type="text" class="form-control" id="crianza" name="crianza" value="{{ $vino->crianza }}">
            </div>

            <div class="mb-3">
                <label for="potencial_guarda" class="form-label">Potencial de Guarda</label>
                <input type="text" class="form-control" id="potencial_guarda" name="potencial_guarda" value="{{ $vino->potencial_guarda }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Vino</button>
        </form>
    </div>

</x-app>
