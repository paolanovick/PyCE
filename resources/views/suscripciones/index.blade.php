@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Gestionar Suscripciones</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <a href="{{ route('suscripciones.create') }}" class="btn btn-primary">Crear Nueva Suscripción</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suscripciones as $suscripcion)
            <tr>
                <td>{{ $suscripcion->nombre }}</td>
                <td>{{ $suscripcion->email }}</td>
                <td>
                    <a href="{{ route('suscripciones.edit', $suscripcion->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('suscripciones.destroy', $suscripcion->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta suscripción?');">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $suscripciones->links() }} <!-- Paginación -->
</div>
@endsection
