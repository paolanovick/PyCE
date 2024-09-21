<x-layout>
    <x-slot:title>Home</x-slot:title>

    <div class="banner">
        <h1>Bienvenido a Nuestra Tienda de Vinos</h1>
    </div>

    <section>
        @foreach($blogs as $blog)
            <article>
                <h2>{{ $blog->titulo }}</h2>
                <img src="{{ asset($blog->imagen) }}" alt="{{ $blog->titulo }}">
                <p>{{ $blog->contenido }}</p>
            </article>
        @endforeach
    </section>
</x-layout>
