<x-layout>
    <x-slot:title>Home</x-slot:title>

    <div class="banner">
        <h1>Bienvenido a Nuestra Tienda de Vinos</h1>
    </div>

    <section>
        <h2>Últimos Artículos del Blog</h2>
        <h1>un cambio de prueba</h1>

        <!-- Primer artículo -->
        <article class="d-flex">
            <div class="text-container" style="flex: 1;">
                <h3>Cómo Elegir el Vino Perfecto</h3>
                <p>En este artículo, exploramos los factores clave para elegir el vino ideal para cualquier ocasión. Desde la selección de la variedad de uva hasta el maridaje adecuado, descubrirás todos los secretos para convertirte en un experto en vinos.</p>
                <p>Aprende sobre la temperatura de servicio, las copas adecuadas y cómo leer las etiquetas para hacer la mejor elección en cada situación. ¡No dejes que el momento te sorprenda sin el vino perfecto!</p>
            </div>
            <img class="botellas img-fluid" src="{{ asset('imagenes/chardonnay.jpg') }}" alt="Cómo Elegir el Vino Perfecto" >
        </article>

        <!-- Segundo artículo -->
        <article class="d-flex" style="margin-top: 20px;">
            <div class="text-container" style="flex: 1;">
                <h3>Los Mejores Vinos de la Temporada</h3>
                <p>Descubre cuáles son los vinos más recomendados para esta temporada. Ya sea que busques tintos robustos o blancos frescos, en este artículo te ofrecemos una selección de los mejores vinos para disfrutar en cualquier ocasión.</p>
            </div>
            <img class="botellas img-fluid" src="{{ asset('imagenes/chardonnay.jpg') }}" alt="Los Mejores Vinos de la Temporada" >
        </article>
    </section>
</x-layout>
