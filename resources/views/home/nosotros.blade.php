<x-layout :title="'Nosotros'">
    <h1 class="mb-3">Sobre Nosotros</h1>
     <div class="row mt-4">
        <div class="col-md-6">
            <h2 class="mb-3">Nuestra Historia</h2>
            
            <p class="letra-capital">
                Fundada en el año 2004, nuestra empresa ha estado comprometida en ofrecer productos de alta calidad, con un enfoque en la satisfacción de nuestros clientes. Lo que comenzó como un pequeño emprendimiento se ha convertido en una empresa reconocida en el sector de vinos, con una amplia gama de productos para todos los gustos.
            </p>
          
        </div>
         <div class="col-md-6">
           <img class="nosotros img-fluid" src="{{ asset('/estaticas/barril.jpg') }}" alt="Barril"style="max-width: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">

 </div>
       <div class="col-md-9 me-auto text-end"> <!-- Agrega 'text-end' para alinear a la derecha -->
        <h2 class="mb-3">Nuestra Misión</h2>
        
        <p class="letra-capital col-md-9 me-auto text-en">
            Nuestro objetivo es llevar a cada cliente la mejor selección de vinos, con una atención personalizada y un servicio excepcional. Creemos en la calidad y la innovación, manteniendo siempre los más altos estándares en la selección de nuestros productos.
        </p>
        </div>
     

    <div class="row mt-5">
        <div class="col-md-6">
            <h2 class="mb-3">Nuestros Valores</h2>
            <ul>
                <li class="letra-capital" > <strong>Calidad:</strong> Solo ofrecemos productos de la más alta calidad, seleccionados cuidadosamente.</li>
                <li <li class="letra-capital" ><strong>Compromiso:</strong> Nos dedicamos a brindar un excelente servicio al cliente en cada etapa.</li>
                <li <li class="letra-capital" ><strong>Sostenibilidad:</strong> Nos esforzamos por reducir nuestro impacto ambiental en todas nuestras operaciones.</li>
                <li <li class="letra-capital" ><strong>Innovación:</strong> Estamos en constante búsqueda de nuevas formas de mejorar nuestros productos y servicios.</li>
            </ul>
        </div>
         <div class="col-md-6">
    <img src="{{ asset('/estaticas/uvas.jpg') }}" alt="Barril" class="img-fluid" style="max-width: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
</div>
    </div>
</x-layout>