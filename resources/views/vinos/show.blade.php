<x-layout>
    <x-slot:title>{{ $vino->nombre }}</x-slot:title>

    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>{{ $vino->nombre }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $vino->imagen) }}" alt="{{ $vino->nombre }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p><strong>Descripción:</strong> {{ $vino->descripcion }}</p>
                <p><strong>Precio:</strong> ${{ $vino->precio }}</p>
                <p><strong>Notas de Cata:</strong> {{ $vino->notas_de_cata }}</p>
                <p><strong>Sugerencias de Acompañamiento:</strong> {{ $vino->sugerencias_de_acompaniamiento }}</p>

                <!-- Ficha Técnica -->
                <h4>Ficha Técnica</h4>
                <ul>
                    <li><strong>Cosecha:</strong> {{ $vino->cosecha }}</li>
                    <li><strong>Variedad:</strong> {{ $vino->variedad }}</li>
                    <li><strong>Crianza:</strong> {{ $vino->crianza }}</li>
                    <li><strong>Potencial de Guarda:</strong> {{ $vino->potencial_guarda }}</li>
                </ul>

                <form action="{{ route('vinos.comprar', $vino->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary-violeta">Comprar</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
