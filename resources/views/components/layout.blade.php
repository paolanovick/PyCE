<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Pagina Principal' }}</title>
   <link rel="stylesheet" href="{{asset("css/css.css")}}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
</head>


<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://i.pinimg.com/564x/03/22/4b/03224b0e0a3cc6261073b4cc2710ee99.jpg" alt="Logo"
                    style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/vinos">Vinos</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/suscripcion">Suscripción</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/asesoria">Asesoría</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container p-4">
        {{ $slot }}
    </main>

    <footer class="bg-light py-3 text-center">
        <p class="mb-0">Copyright &copy; Da Vinci 2024</p>
    </footer>

</body>
