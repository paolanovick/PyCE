<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vino;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class VinoController extends Controller
{
    public function index()
    {

        $vinos = Vino::all();


        return view('vinos.index', ['vinos' => $vinos]);
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd("aa");
        //dd("create");
        return view('vinos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Otros campos...
        ]);

        $vino = new Vino();
        $vino->nombre = $request->nombre;
        $vino->descripcion = $request->descripcion;
        $vino->precio = $request->precio;
       

        if ($request->hasFile('imagen')) {
            $vino->imagen = $request->file('imagen')->store('imagenes', 'public');
        }

        // Guarda otros campos según tu modelo
        $vino->save();

        return redirect()->route('vinos.index')->with('success', 'Vino creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vino = Vino::findOrFail($id);
        $blogs = Blog::all(); // Obtiene todos los blogs

        return view('vinos.show', compact('vino', 'blogs')); // Pasa el vino y los blogs a la vista
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vino = Vino::findOrFail($id);

        return view('vinos.edit', compact('vino')); //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vino = Vino::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Cambiado a nullable
            // Otros campos...
        ]);

        // Preparar los datos de actualización
        $data = [
            'precio' => $request->precio,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            // Otros campos...
        ];

        // Si hay una nueva imagen, se guarda
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('imagenes'); // Asegúrate de tener el disco configurado
        }

        $vino->update($data); // Actualiza el modelo

        return redirect()->route('vinos.index')->with('success', 'Vino actualizado con éxito.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vino = Vino::find($id);

        if ($vino) {
            $vino->delete();
            return redirect()->route('vinos.index')->with('success', 'Vino eliminado exitosamente.');
        }

        return redirect()->route('vinos.index')->with('error', 'Vino no encontrado.');
    }


    public function vinos()
    {
        $vinos = Vino::all(); // O cualquier lógica que uses para obtener los vinos
        //dd("");
        //dd($vinos);
        return view('vinos.index', ['vinos' => $vinos]);
    }
}
