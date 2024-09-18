<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsesoriasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('asesorias')->insert([
            [
                'titulo' => 'Estrategias de Marketing Digital',
                'resumen' => 'Aprende las mejores estrategias para llevar tu negocio al siguiente nivel en el mundo digital.',
                'contenido' => 'En esta asesoría, exploramos diversas estrategias de marketing digital, desde la optimización en motores de búsqueda (SEO) hasta el marketing en redes sociales. Te proporcionamos herramientas y técnicas para mejorar la presencia en línea de tu empresa y atraer a más clientes.',
                'imagen' => 'images/marketing_digital.jpg',
            ],
            [
                'titulo' => 'Gestión Financiera para Startups',
                'resumen' => 'Descubre cómo gestionar eficazmente las finanzas de tu nueva empresa para asegurar su éxito.',
                'contenido' => 'La gestión financiera es crucial para cualquier startup. Esta asesoría cubre aspectos como la elaboración de presupuestos, el manejo de flujos de efectivo y la planificación financiera a largo plazo. Aprenderás a tomar decisiones financieras informadas y a mantener tus finanzas en buen estado.',
                'imagen' => 'images/gestion_financiera.jpg',
            ],
            [
                'titulo' => 'Transformación Digital en Empresas',
                'resumen' => 'Conoce cómo implementar la transformación digital en tu empresa para mejorar procesos y resultados.',
                'contenido' => 'La transformación digital implica la integración de tecnología en todos los aspectos de un negocio. Esta asesoría te guiará a través del proceso de digitalización, desde la adopción de nuevas herramientas tecnológicas hasta la capacitación de tu equipo. Obtendrás una visión clara de cómo la tecnología puede impulsar tu negocio.',
                'imagen' => 'images/transformacion_digital.jpg',
            ],
            // Puedes agregar más registros si lo deseas
        ]);
    }
}
