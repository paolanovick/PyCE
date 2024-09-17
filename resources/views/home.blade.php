<x-layout>
    <x-slot:title>Página Principal</x-slot:title>

    <h1>Bienvenido a Nuestra Tienda de Vinos</h1>

    <section>
        <h2>Vino Destacado</h2>
        @if(isset($vino))
            <div>
                <img src="{{ asset('images/vinos/' . $vino->imagen) }}" alt="{{ $vino->nombre }}" class="img-fluid">
                <h3>{{ $vino->nombre }}</h3>
                <p>{{ $vino->descripcion }}</p>
                <p>Precio: ${{ $vino->precio }}</p>
            </div>
        @else
            <p>No hay un vino destacado en este momento.</p>
        @endif
    </section>

    <section>
        <h2>Últimos Artículos de Asesoría</h2>
        @foreach($asesorias as $asesoria)
            <article>
                <h3><a href="{{ route('asesoria.show', $asesoria->id) }}">{{ $asesoria->titulo }}</a></h3>
                <img src="{{ asset('images/asesoria/' . $asesoria->imagen ?? 'default.jpg') }}" alt="{{ $asesoria->titulo }}" class="img-fluid">
                <p>{{ $asesoria->resumen }}</p>
            </article>
        @endforeach
    </section>
</x-layout>
