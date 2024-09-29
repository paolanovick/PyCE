<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAsesoria;
use App\Models\Club;
use App\Models\Suscripcion;
use App\Models\Vino;
use App\Models\Asesoria; // Reemplaza BlogPost con Asesoria o el modelo que estés usando
use Illuminate\Http\Request;
use App\Models\Blog; // Asegúrate de tener esta línea
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    public function home()
    {
        $blogs = Blog::latest()->take(30)->get(); // Obtiene los últimos 30 blogs
        return view('home', compact('blogs'));
    }


    public function showBlog(Blog $blog)
    {
        return view('home.blog', compact('blog'));
    }

    public function nosotros()
    {
        return view('home.nosotros');
    }

    public function clubes()
    {
        //dd("a");
        $clubes = Club::all();

        return view('home.club', compact('clubes'));
    }

    public function formsuscripcion(Club $club)
    {
        return view('home.suscripcion', compact('club'));
    }

    public function categoriaasesoria()
    {
        // Obtén todas las categorías de asesorías de la base de datos
        $CategoriaAsesorias = CategoriaAsesoria::all();

        // Pasa las categorías a la vista
        return view('home.categoriaasesoria', compact('CategoriaAsesorias'));
    }

    public function formAsesoria(CategoriaAsesoria $categoriaasesoria)
    {
        return view('home.formasesoria', compact('categoriaasesoria'));
    }

    public function registrarAsesoria(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string|max:255', 
            'celular' => 'required|numeric|min:10',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Asesoria::class],
            
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'email.unique' => 'El correo ya está registrado.',
            ]);

        // Buscar la categoría de asesoría
        $model_club = CategoriaAsesoria::findOrFail($request->categoriaasesoria);

        try {
            // Crear la asesoría
            Asesoria::create([
                'nombre' => $request->nombre,
                'email' => $request->email,
                'celular' => $request->celular,
                 ]);

            // Redirigir en caso de éxito con mensaje flash
            session()->flash('success', 'Su asesoría se registró con éxito.');

            return redirect()->route('home.asesoria', ['club' => $model_club]);
        } catch (\Exception $e) {
            // Redirigir en caso de error con mensaje flash
            session()->flash('error', 'Ocurrió un error al registrar la asesoría: ' . $e->getMessage());

            return redirect()->route('home.asesoria', ['club' => $model_club]);
        }
    }


    public function suscripcionRequest(Request $request)
    {
        // Validar y almacenar los datos del formulario de suscripción
        $data = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            // Otros campos
        ]);




        return redirect()->back()->with('success', 'Ya está suscrito al club de vinos.');
    }

    public function index()
    {
        $suscripciones = '';
        $blogs = Blog::latest()->take(3)->get();
        //dd($blogs);
        return view('home', compact('blogs', 'suscripciones')); // Pasar la variable a la vista
    }

    public function listavinos()
    {
        $vinos = Vino::all(); // O cualquier lógica que uses para obtener los vinos
        //dd("");
        //dd($vinos);
        return view('home.listavinos', compact('vinos'));
    }

    public function detallevino(Vino $vino)
    {
        return view('home.detallevino', compact('vino')); // Pasa el vino y los blogs a la vista
    }

    public function comprar(Request $request, Vino $vino)
    {
        session()->flash('success', 'Su compra se realizó con éxito.');
        return redirect()->route('listavinos.show', $vino);
    }
    // HomeController.php
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
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

        return redirect()->route('publicacionblog.index')->with('success', 'Blog actualizado correctamente.');
    }

    public function registrarInscripcion(Request $request)
    {
        $request->validate([
            'club' => 'required',
            'nombre' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Suscripcion::class],
        ], [
            'email.unique' => 'El correo ya está registrado.',
        ]);


        $model_club = Club::findOrFail($request->club);


        try {
            Suscripcion::create([
                'nombre' => $request->nombre,
                'email' => $request->email,
                'tipo' => $request->club,
            ]);

            // Redirigir en caso de éxito
            session()->flash('success', 'Su compra se realizó con éxito.');

            return redirect()->route('home.formsuscripcion', ['club' => $model_club])->with('success', 'Inscripción creada con éxito.');
        } catch (\Exception $e) {
            // Redirigir en caso de error
            session()->flash('error', 'Ocurrió un error: ' . $e->getMessage());
        }
    }
}
