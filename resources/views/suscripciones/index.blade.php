<x-app :title="'Suscripciones'">
    <div class="container mt-4">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Club</th>
                    <th>Extra</th>
                    <th>Registrado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suscripciones as $suscripcion)
                    <tr>
                        <td>{{ $suscripcion->nombre }}</td>
                        <td>{{ $suscripcion->email }}</td>
                        <td>{{ $suscripcion->tipo }}</td>
                        <td>{{ $suscripcion->informacion_adicional }}</td>
                        <td>{{ date_format($suscripcion->created_at, '%Y-%m-%d') }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app>
