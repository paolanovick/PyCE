<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAsesoria;
use Illuminate\Http\Request;

class CategoriaAsesoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Obtén todas las asesorías de la base de datos
        $categoria_asesorias = CategoriaAsesoria::all();
        //dd($asesorias); // Muestra el contenido de la variable $asesorias
        // Pasa las asesorías a la vista
        return view('categoria_asesorias.index', compact('categoria_asesorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria_asesorias.create'); // Vista para crear un nuevo blog
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categoriaAsesoria = CategoriaAsesoria::findOrFail($id);
        return view('categoria_asesorias.show', compact('categoriaAsesoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaAsesoria $categoria_asesoria)
    {
        return view('categoria_asesorias.edit', compact('categoria_asesoria'));;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $categoriaAseoria = CategoriaAsesoria::findOrFail($id);
        $categoriaAseoria->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio_mensual' => $request->precio_mensual,
        ]);
        return redirect()->route('categoria_asesorias.index')->with('success', 'Categoria de asesoria actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria_asesorias = CategoriaAsesoria::findOrFail($id); // Obtener la opción por ID
        $categoria_asesorias->delete(); // Eliminar la opción

        return redirect()->route('categoria_asesorias.index')->with('success', 'Opción del Categroria de Asesoria eliminada exitosamente.');
    }
}
