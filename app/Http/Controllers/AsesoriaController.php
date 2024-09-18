<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asesoria;

class AsesoriaController extends Controller
{
    public function index()
    {
        return view('home.asesoria');
    }

    public function show($id)
    {
        // Lógica para mostrar los detalles de asesoría
        return view('home.asesoria-detail', ['id' => $id]);
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
            'imagen' => $request->input('imagen'),
        ]);

        return redirect()->back()->with('success', 'Asesoría solicitada exitosamente.');
    }
}
