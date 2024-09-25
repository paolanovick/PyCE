<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">

    <title>Admin</title>


</head>

<body class="body_admin">
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <!-- Logo y nombre de la marca -->
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <img src="https://i.pinimg.com/564x/03/22/4b/03224b0e0a3cc6261073b4cc2710ee99.jpg" alt="Logo"
                        style="height: 60px; border-radius:30px;">
                    <span
                        style="font-size: 24px; font-weight: bold; color: whitesmoke; margin-left: 10px;">Enófilo</span>
                </a>

                <!-- Botón Hamburguesa para móviles -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-color: white;"></span>
                </button>

                <!-- Enlaces de navegación -->
                <div class="navbar-collapse collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <!-- Enlace al dashboard -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                        </li>

                        <!-- Enlace a la lista de vinos -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('vinos.index') }}">{{ __('Vinos') }}</a>
                        </li>
                        <!-- Enlace a la lista de blogs -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs.index') }}">{{ __('Blogs') }}</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="suscripciones.index">{{ __('Suscripciones') }}</a>
                        </li>

                        <!-- Dropdown de perfil y logout -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                PERFIL
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.index') }}">Perfil</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="#" class="dropdown-item"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container p-4">
            {{ $slot }}
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
