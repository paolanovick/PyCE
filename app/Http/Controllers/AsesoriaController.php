<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAsesoria;
use Illuminate\Http\Request;
use App\Models\Asesoria;

class AsesoriaController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'resumen' => 'required|string',
            'contenido' => 'required|string',
            'imagen' => 'nullable|string',
            'email' => 'required|email',

        ]);

        Asesoria::create([
            'titulo' => $request->input('titulo'),
            'resumen' => $request->input('resumen'),
            'contenido' => $request->input('contenido'),
            'imagen' => $validated['imagen'] ?? null,
            'email' => $request->input('email'),


        ]);
        return redirect()->back()->with('success', 'Ya estás inscrito para recibir asesorías.');
    }
}
