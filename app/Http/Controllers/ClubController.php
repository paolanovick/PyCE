<?php

// app/Http/Controllers/ClubController.php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::all(); // Obtiene todos los clubes
        return view('club.index', compact('clubs')); // Asegúrate de que esta vista sea correcta
    }



    public function create()
    {
        return view('club.create'); // Vista para crear una nueva opción de club
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

        // Redirigir al listado de suscripciones con un mensaje de éxito
        return redirect()->route('clubs.index')->with('success', 'Nuevo Club se ha creado');
    }
    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $club = Club::findOrFail($id); // Obtener la opción por ID
        return view('club.edit', compact('club')); // Pasar a la vista de edición
    }

    // Actualizar la opción del club
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio_mensual' => 'required|numeric',
        ]);

        $club = Club::findOrFail($id); // Obtener la opción por ID
        $club->update($data); // Actualizar la opción

        return redirect()->route('clubs.index')->with('success', 'Opción del club actualizada exitosamente.');
    }

    // Eliminar una opción del club
    public function destroy($id)
    {
        $club = Club::findOrFail($id); // Obtener la opción por ID
        $club->delete(); // Eliminar la opción

        return redirect()->route('clubs.index')->with('success', 'Opción del club eliminada exitosamente.');
    }
}
