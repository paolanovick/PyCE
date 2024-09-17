<x-layout title="Solicitar Asesoría">
    <h1>Solicitar Asesoría</h1>
    <form action="{{ route('asesorias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="mb-3">
            <label for="forma_pago" class="form-label">Forma de Pago</label>
            <select class="form-select" id="forma_pago" name="forma_pago" required>
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="tarjeta">Tarjeta de Crédito</option>
                <option value="paypal">PayPal</option>
                <option value="transferencia">Transferencia Bancaria</option>
            </select>
        </div>
        <input type="hidden" name="asesoria_id" value="{{ $asesoria->id }}">
        <button type="submit" class="btn btn-primary">Confirmar Solicitud</button>
    </form>
</x-layout>
