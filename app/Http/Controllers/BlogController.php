<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); // Obtener todos los blogs
        return view('blog.index', compact('blogs')); // Cambia 'admin.blogs.index' si tu vista está en otro lugar
    }

    public function create()
    {
        return view('blog.create'); // Vista para crear un nuevo blog
    }

    public function store(Request $request)
    {
        // Validación y almacenamiento del nuevo blog
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'resumen' => 'nullable|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = new Blog($validatedData);
        if ($request->hasFile('imagen')) {
            $blog->imagen = $request->file('imagen')->store('imagenes/blogs'); // Almacena la imagen
        }
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog creado con éxito.');
    }
    // BlogController.php

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
            'resumen' => 'nullable',
            'imagen' => 'nullable|image',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->titulo = $request->titulo;
        $blog->contenido = $request->contenido;
        $blog->resumen = $request->resumen;

        // Manejar la subida de la imagen
        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('blog', 'public');
            $blog->imagen = $path;
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog actualizado correctamente.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id); // Obtener la opción por ID
        $blog->delete(); // Eliminar la opción

        return redirect()->route('blogs.index')->with('success', 'Opción del blog eliminada exitosamente.');
    }
}

