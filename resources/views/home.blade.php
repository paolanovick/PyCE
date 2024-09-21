<x-layout>
    <x-slot:title>Home</x-slot:title>

    <div class="banner">
        <h1>Bienvenido a Nuestra Tienda de Vinos</h1>
        <p>hola</p>
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
</x-layout>
