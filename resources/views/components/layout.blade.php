<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Página Principal' }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}"> <!-- Cierre del tag <link> -->
</head>


<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://i.pinimg.com/564x/03/22/4b/03224b0e0a3cc6261073b4cc2710ee99.jpg" alt="Logo de Enófilo"
                    style="height: 60px; border-radius:30px;">
                <span style="font-size: 24px; font-weight: bold; color: whitesmoke; margin-left: 10px;">Enófilo</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color: white;"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/listavinos">Vinos</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/clubes">Suscripción</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/categoria">Asesoría</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/login">Accede</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/register">Unete</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container p-4">
        {{ $slot }}
    </main>

    <footer>
        <div class="footer-content">

            <p>Explora nuestra selección de vinos premium y descubre los mejores sabores.</p>

        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Enófilo. Todos los derechos reservados.</p>
            <p><a href="#">Política de Privacidad</a> | <a href="#">Términos de Servicio</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
