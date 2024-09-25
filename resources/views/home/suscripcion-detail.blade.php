<x-layout>
    <x-slot:title>Detalle de Suscripción</x-slot:title>

    <h1>Detalle de Suscripción</h1>
    <p><strong>Nombre:</strong> {{ $suscripcion->nombre }}</p>
    <p><strong>Descripcion:</strong> {{ $suscripcion->descripcion }}</p>

    <h2>Crear Nueva Suscripción</h2>
    <form>
        @csrf
        <input type="text" id="club" name="club" value="{{ $suscripcion->id }}">
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
