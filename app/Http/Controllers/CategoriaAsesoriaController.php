<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAsesoria;
use Illuminate\Http\Request;

class CategoriaAsesoriaController extends Controller
{
    public function index()
    {

        // Obtén todas las asesorías de la base de datos
        $categoria_asesorias = CategoriaAsesoria::all();
        //dd($asesorias); // Muestra el contenido de la variable $asesorias
        // Pasa las asesorías a la vista
        return view('categoria_asesorias.index', compact('categoria_asesorias'));
    }
    public function create()
    {
        return view('categoria_asesorias.create'); // Vista para crear un nuevo blog
    }

    public function show($id)
    {
        $categoriaAsesoria = CategoriaAsesoria::findOrFail($id);
        return view('categoria_asesorias.show', compact('categoriaAsesoria'));
    }
    public function store(Request $request)
    {
        //return $request->all();
        // Validación y almacenamiento del nuevo blog
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string', // Puede ser nulo
            'precio_mensual' => 'required|numeric', // Asegúrate de que se envíe un valor
        ]);



        $categoria_asesorias = new CategoriaAsesoria($validatedData);

        $categoria_asesorias->save();

        return redirect()->route('categoria_asesorias.index')->with('success', 'Blog creado con éxito.');
    }
}
