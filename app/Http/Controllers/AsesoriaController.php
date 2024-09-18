<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asesoria;

class AsesoriaController extends Controller
{
    public function index()
    {

        // Obtén todas las asesorías de la base de datos
        $asesorias = Asesoria::all();
        //dd($asesorias); // Muestra el contenido de la variable $asesorias
        // Pasa las asesorías a la vista
        return view('home.asesoria', compact('asesorias'));
    }
    public function show($id)
    {
        $asesoria = Asesoria::findOrFail($id);
        return view('home.asesoria-detail', compact('asesoria'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'resumen' => 'required|string',
            'contenido' => 'required|string',
            'imagen' => 'nullable|string',
        ]);

        Asesoria::create([
            'titulo' => $request->input('titulo'),
            'resumen' => $request->input('resumen'),
            'contenido' => $request->input('contenido'),
            'imagen' => $validated['imagen'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Asesoría solicitada exitosamente.');
    }

    public function request($id)
    {
        $asesoria = Asesoria::findOrFail($id);
        return view('home.asesoria-request', compact('asesoria'));
    }
}
