<x-layout>
    <x-slot:title>Home</x-slot:title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    
    <div >
       
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('imagenes/banner1.jpg')}}" class="d-block w-100" alt="dos personas haciendo brindis con las copas de vino">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color:white">Bienvenido a nuestra tienda de vinos</h1>
                        <p>Aquí encontraras vinos de excelente calidad</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imagenes/banner2.jpg')}}" class="d-block w-100" alt="plantacion de vinos">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 style="color:white">Descubre los Mejores Vinos de Argentina en tu casa</h2>
                        <p>Únete a nuestra exclusiva suscripción de vinos y recibe cada mes una selección de etiquetas premium, perfectas para disfrutar, aprender y compartir. ¡Vive la experiencia del vino como nunca antes!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imagenes/banner3.jpg')}}" class="d-block w-100" alt="paisaje con plantas de parra">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 style="color:white">Los Mejores Vinos a tu Alcance</h2>
                        <p>Explora nuestra selección de vinos premium, cuidadosamente elegidos.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <section>
        <h2>Últimos Artículos del Blog</h2>
        <div class="row">
            @foreach ($blogs as $index => $blog)
            <div class="col-12 mb-4"> <!-- Ancho completo -->
                <div class="cardBlog" style="display: flex; flex-direction: row; align-items: center;">
                    @if($index % 2 == 0)
                    <img src="{{ Storage::disk('blog')->url($blog->imagen) }}" alt="{{ $blog->titulo }}" style="max-width: 300px; height: 150px;">
                    @else

                    <img src="{{ Storage::disk('blog')->url($blog->imagen) }}" alt="{{ $blog->titulo }}" style="width: 25%; height: auto; margin-left: 20px;">
                    @endif
                    <div class="card-body" style="flex: 1;">
                        <h5 class="card-title">{{ $blog->titulo }}</h5>
                        <p class="card-text">{{ $blog->contenido }}</p> <!-- Mostrar todo el contenido -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</x-layout>