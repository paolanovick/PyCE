<x-layout title="Asesorías">
    <x-slot:title>Te asesoramos</x-slot:title>
    <section class="asesorias-section">
        <h1>Asesorías</h1>
        <div class="asistencia-container">
            <p>Club Del Vino pone a disposición de viticultores, enólogos y bodegas un servicio integral de asesoría en
                campo y bodega,
                con el fin de facilitar la toma de decisiones en el proceso de producción y elaboración del vino. Este
                servicio
                incluye:</p>
            <p>Visitas in situ, asesoramiento técnico a demanda y personalizado, toma y análisis de muestras, informes
                de
                resultados y recomendaciones, seguimiento y tratamiento técnico de reclamaciones, entre otros servicios.
            </p>
            <p>Un equipamiento técnico innovador y puntero, garantizando la capacidad analítica en todas las etapas de
                elaboración.</p>
            <p>La atención de un equipo profesionales altamente cualiﬁcados y especializados en viticultura, procesos
                enológicos, microbiología, análisis sensorial e ingeniería ambiental y sostenibilidad.</p>
            <p>Garantía de confidencialidad y objetividad en el proceso de análisis y en los resultados.</p>
        </div>

        <section class="row">

            @forelse($asesorias as $asesoria)
                <div class="col-md-4">


                    <h5 class="card-title">{{ $asesoria->titulo }}</h5>
                    <p class="card-text">{{ $asesoria->descripcion }}</p>

                    <!-- Botón de Más Información -->
                    <a href="{{ route('asesorias.show', $asesoria->id) }}" class="btn "
                        style="margin: 30px; background-color: #800000; color:white">Más
                        Información</a>



                </div>
            @empty
                <p class="no-asesorias">No hay asesorías disponibles.</p>
            @endforelse
        </section>
    </section>
</x-layout>
