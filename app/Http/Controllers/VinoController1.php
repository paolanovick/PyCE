<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use App\Models\Blog;
use Illuminate\Http\Request;

class VinoController1 extends Controller
{
    public function index()
    {
        $vinos = Vino::all();

        return view('vinos.index', compact('vinos'));
    }
    public function vinos()
    {
        $vinos = Vino::all(); // O cualquier lógica que uses para obtener los vinos
        //dd("");
        //dd($vinos);
        return view('vinos.index', ['vinos' => $vinos]);
    }
    public function show($id)
    {
        $vino = Vino::findOrFail($id);
        $blogs = Blog::all(); // Obtiene todos los blogs

        return view('vinos.show', compact('vino', 'blogs')); // Pasa el vino y los blogs a la vista
    }
    public function comprar(Request $request, $id)
    {
        session()->flash('success', 'Su compra se realizó con éxito.');
        return redirect()->route('vinos.show', $id);
    }

    public function creando()
    {
        dd("create");
        return view('vinos.create');
    }
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
}
