<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAsesoria;
use Illuminate\Http\Request;
use App\Models\Asesoria;

class AsesoriaController extends Controller
{
    public function index()
    {

        // Obtén todas las asesorías de la base de datos
        $CategoriaAsesorias = CategoriaAsesoria::all();
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

    public function request($id)
    {
        $asesoria = Asesoria::findOrFail($id);
        return view('home.asesoria-request', compact('asesoria'));
    }
}
