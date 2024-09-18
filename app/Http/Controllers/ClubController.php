<?php

// app/Http/Controllers/ClubController.php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        // Obtener todas las suscripciones (clubes)
        $clubes = Club::all();

        // Pasar la variable $clubes a la vista
        return view('home.suscripcion', ['clubes' => $clubes]);
    }

    public function show($id)
    {
        // Obtener una suscripción específica por su ID
        $club = Club::findOrFail($id);

        // Pasar la variable $club a la vista
        return view('home.suscripcion-detail', ['club' => $club]);
    }

    public function store(Request $request)
    {
        // Validar y almacenar los datos del formulario de suscripción
        $data = $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'precio_mensual' => 'required|numeric',
        ]);

        // Crear una nueva suscripción (club) en la base de datos
        Club::create($data);

        return redirect()->back()->with('success', 'Nueva suscripción creada exitosamente.');
    }

    // Otros métodos del controlador si es necesario
}
