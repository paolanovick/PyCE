<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAsesoria;
use Illuminate\Http\Request;

class CategoriaAsesoriaController extends Controller
{
    public function index()
    {

        // Obtén todas las asesorías de la base de datos
        $CategoriaAsesorias = CategoriaAsesoria::all();
        //dd($asesorias); // Muestra el contenido de la variable $asesorias
        // Pasa las asesorías a la vista
        return view('categoria_asesorias.index', compact('CategoriaAsesorias'));
    }

    public function show($id)
    {
        $categoriaAsesoria = CategoriaAsesoria::findOrFail($id);
        return view('categoria_asesorias.show', compact('categoriaAsesoria'));
    }
}
