<x-layout>
    <x-slot:title>{{ $blog->titulo }}</x-slot:title>

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
  <img src="{{ Storage::disk('blog')->url($blog->imagen) }}" alt="{{ $blog->titulo }}"
                 style="max-width: 300px; height: 150px; margin-right: 20px;"> 
        <div class="card mb-4" style="display: flex; flex-direction: row; align-items: center;">
            <!-- Imagen del blog (estilo similar al segundo código) -->
          
            
            <div class="card-body" style="flex: 1;">
                <h1 class="card-title">{{ $blog->titulo }}</h1>
                <p class="card-text">{{ $blog->contenido }}</p> <!-- Contenido del blog -->
            </div>
        </div>

        <div class="card-footer">
            <a href="{{ route('home') }}" class="btn btn-primary">Volver al Inicio</a>
        </div>
    </div>

</x-layout>
