<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Suscripcion;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suscripciones = Suscripcion::all();
        return view('suscripciones.index', compact('suscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suscripciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos del formulario
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
        ]);

        // Crear una nueva suscripción en la base de datos
        Club::create($data);

        // Redirigir a la vista de listado de suscripciones con un mensaje de éxito
        return redirect()->route('suscripciones.index')->with('success', 'Suscripción creada exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Obtener la suscripción por ID para editar
        $suscripcion = Suscripcion::findOrFail($id);
        return view('suscripciones.edit', compact('suscripcion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos actualizados
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
        ]);

        // Actualizar la suscripción en la base de datos
        $suscripcion = Suscripcion::findOrFail($id);
        $suscripcion->update($data);

        return redirect()->route('suscripciones.index')->with('success', 'Suscripción actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eliminar una suscripción
        $suscripcion = Suscripcion::findOrFail($id);
        $suscripcion->delete();

        return redirect()->route('suscripciones.index')->with('success', 'Suscripción eliminada exitosamente.');
    }
}
