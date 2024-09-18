<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Pagina Principal' }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/bootstrap.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://i.pinimg.com/564x/03/22/4b/03224b0e0a3cc6261073b4cc2710ee99.jpg" alt="Logo" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/vinos">Vinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/suscripcion">Suscripción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/asesoria">Asesoría</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container p-4">
        {{ $slot }}
    </main>

    <footer class="bg-light text-center py-3">
        <p class="mb-0">Copyright &copy; Da Vinci 2024</p>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
