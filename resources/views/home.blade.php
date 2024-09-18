
<x-layout>
    <x-slot:title>home</x-slot:title>

    <h1>Bienvenido a Nuestra Tienda de Vinos</h1>

    <section>
        <h2>Últimos Artículos del Blog</h2>
        <article>
            <h3>Cómo Elegir el Vino Perfecto</h3>
            <img src="path-to-your-image/blog-article1.jpg" alt="Cómo Elegir el Vino Perfecto" class="img-fluid">
            <p>En este artículo, exploramos los factores clave para elegir el vino ideal para cualquier ocasión...</p>
        </article>
        <article>
            <h3>Los Mejores Vinos de la Temporada</h3>
            <img src="path-to-your-image/blog-article2.jpg" alt="Mejores Vinos de la Temporada" class="img-fluid">
            <p>Descubre cuáles son los vinos más recomendados para esta temporada...</p>
        </article>
    </section>
</x-layout>
 el codigo de index es <x-layout>
    <x-slot:title>Listado de Vinos</x-slot:title>

    <h1>Vinos Ricos</h1>
    <div class="row">
        @foreach($vinos as $vino)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ url('path-to-your-image/'.$vino->imagen) }}" class="card-img-top" alt="{{ $vino->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $vino->nombre }}</h5>
                        <p class="card-text">{{ $vino->descripcion }}</p>
                        <p><strong>Precio:</strong> ${{ $vino->precio }}</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>