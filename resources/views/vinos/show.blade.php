<!-- resources/views/vinos/show.blade.php -->
<x-layout>
    <x-slot:title>{{ $vino->nombre }}</x-slot:title>

    <div class="container mt-5">
        <h1>{{ $vino->nombre }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($vino->imagen) }}" alt="{{ $vino->nombre }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p><strong>Descripción:</strong> {{ $vino->descripcion }}</p>
                <p><strong>Precio:</strong> ${{ $vino->precio }}</p>

                <!-- Ficha Técnica -->
                <h4>Ficha Técnica</h4>
                <ul>
                    <li><strong>Cosecha:</strong> {{ $vino->cosecha }}</li>
                    <li><strong>Variedad:</strong> {{ $vino->variedad }}</li>
                    <li><strong>Crianza:</strong> {{ $vino->crianza }}</li>
                    <li><strong>Potencial de Guarda:</strong> {{ $vino->potencial_guarda }}</li>
                </ul>

                <!-- Notas de Cata -->
                <h4>Notas de Cata</h4>
                <p>{{ $vino->notas_cata }}</p>

                <!-- Sugerencias de Acompañamiento -->
                <h4>Sugerencias de Acompañamiento</h4>
                <p>{{ $vino->sugerencias_acompanamiento }}</p>

                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>

        <!-- Mostrar Blogs Relacionados -->
        <div class="mt-5">
            <h3>Artículos Relacionados</h3>
           @if($blogs->isNotEmpty())
    @foreach($blogs as $blog)
        <div class="blog-item mt-3">
            <h4>{{ $blog->titulo }}</h4>
            <p>{{ $blog->resumen }}</p>
            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-secondary">Leer más</a>
        </div>
    @endforeach
@else
    <p>No hay artículos relacionados disponibles.</p>
@endif

        </div>
    </div>
</x-layout>
