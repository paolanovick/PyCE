<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club; // Si usas Clubes de una base de datos
use App\Models\Suscripcion;

class SuscripcionController extends Controller
{
    // Método para mostrar la página de suscripción con las dos opciones
    public function index()
    {
        // Si no necesitas usar la base de datos, puedes usar este arreglo simulado
        $clubes = [
            (object)[
                'id' => 1,
                'nombre' => 'Suscripción Clásica',
                'descripcion' => 'Acceso a vinos clásicos, ideal para los que disfrutan de una selección tradicional.',
                'precio_mensual' => 1500,
            ],
            (object)[
                'id' => 2,
                'nombre' => 'Suscripción Premium',
                'descripcion' => 'Disfruta de vinos premium seleccionados de las mejores bodegas.',
                'precio_mensual' => 3000,
            ]
        ];

        return view('home.suscripcion', ['clubes' => $clubes]);
    }

    // Método para mostrar los detalles de la suscripción
    public function show($id)
    {
        // Simulación de las suscripciones para mostrar detalles
        $suscripciones = [
            1 => (object)[
                'id' => 1,
                'nombre' => 'Suscripción Clásica',
                'descripcion' => 'Acceso a vinos clásicos.',
                'precio' => 1500
            ],
            2 => (object)[
                'id' => 2,
                'nombre' => 'Suscripción Premium',
                'descripcion' => 'Acceso a vinos Premium seleccionados.',
                'precio' => 3000
            ]
        ];

        $suscripcion = $suscripciones[$id] ?? null;

        if (!$suscripcion) {
            return redirect()->route('suscripcion.index')->with('error', 'Suscripción no encontrada.');
        }

        return view('home.suscripcion-detail', ['suscripcion' => $suscripcion]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:suscripciones,email',
            'plan' => 'required|string',
        ]);

        Suscripcion::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'plan' => $request->input('plan'), // Agregar el plan
        ]);

        return redirect()->back()->with('success', '¡Te has suscripto exitosamente!');
    }
}
