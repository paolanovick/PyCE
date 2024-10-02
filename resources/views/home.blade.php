<x-layout>
    <x-slot:title>Home</x-slot:title>


    <div>

        <div id="carouselExampleCaptions" class="carousel slide ">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('estaticas/banner1.jpg') }}" class="d-block w-100 " style="max-height: 400px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color:white">Bienvenido a nuestra tienda de vinos</h1>
                        <p>Aquí encontraras vinos de excelente calidad</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('estaticas/banner6.avif') }}" class="d-block w-100 " style="max-height: 400px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 style="color:white">Descubre los Mejores Vinos de Argentina en tu casa</h2>
                        <p>Únete a nuestra exclusiva suscripción de vinos y recibe cada mes una selección de etiquetas
                            premium, perfectas para disfrutar, aprender y compartir. ¡Vive la experiencia del vino como
                            nunca antes!</p>
                    </div>
                </div>
                <div class="carousel-item">
            <img src="{{ asset('estaticas/banner2.avif') }}" class="d-block w-100 img-fluid"
                alt="plantacion de vinos" style="max-height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h2 style="color:white">Descubre los Mejores Vinos de Argentina en tu casa</h2>
                <p>Únete a nuestra exclusiva suscripción de vinos y recibe cada mes una selección de etiquetas
                    premium, perfectas para disfrutar, aprender y compartir. ¡Vive la experiencia del vino como nunca
                    antes!</p>
            </div>
        </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <section>
        <h1>Últimos Artículos del Blog</h1>
        <div class="row">
            @foreach ($blogs as $index => $blog)
                <div class="col-12 mb-4 m-10"> <!-- Ancho completo -->
                    <div class="cardBlog" style="display: flex; flex-direction: row; align-items: center; margin:30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        @if ($index % 2 == 0)
                            <img src="{{ Storage::disk('blog')->url($blog->imagen) }}" alt="{{ $blog->titulo }}"
                                style="max-width: 300px; height: 150px; margin:30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                  
                        @else
                            <img src="{{ Storage::disk('blog')->url($blog->imagen) }}" alt="{{ $blog->titulo }}"
                                style="width: 25%; height: auto; margin-left: 20px; margin:30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        @endif
                        <div class="card-body" style="flex: 1;">
                            <h5 class="card-title">{{ $blog->titulo }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::words($blog->contenido, 20, '...') }}</p> <!-- Limitar a 20 palabras -->

                        </div>
                        <div class="card-footer m-5" >
                            <a href="{{ route('publicaciones.show', ['blog' => $blog]) }}" style="margin: 5px; background-color: #800000; color:white"class="btn " style=>Más
                                Información</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</x-layout>
