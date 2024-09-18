<x-layout title="{{ $blog->titulo }}">
    <h1>{{ $blog->titulo }}</h1>
    <p><strong>Publicado el:</strong> {{ $blog->created_at->format('d/m/Y') }}</p>
    <div>
        <p>{{ $blog->contenido }}</p>
    </div>
    <a href="{{ route('blog.index') }}" class="btn btn-primary">Volver a los Blogs</a>
</x-layout>
