<x-app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">{{ __('Información del Perfil') }}</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
                        <p><strong>Correo Electrónico:</strong> {{ $usuario->email }}</p>
                        <a href="{{ route('profile.edit') }}" class="btn btn-warning me-3">Editar Perfil</a>
                        <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
