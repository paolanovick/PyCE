<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Suscripcion;
use App\Models\Vino;
use App\Models\Asesoria; // Reemplaza BlogPost con Asesoria o el modelo que estés usando
use Illuminate\Http\Request;
use App\Models\Blog; // Asegúrate de tener esta línea

class HomeController extends Controller
{
    public function home()
    {
        $blogs = Blog::latest()->take(30)->get(); // Obtiene los últimos 30 blogs
        return view('home', compact('blogs'));
    }
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('publicacionblog.show', compact('blog'));
    }

    public function nosotros()
    {
        return view('home.nosotros');
    }

    public function suscripcion()
    {
        //dd("a");
        $clubes = Club::all();
        /*$clubes = [
            (object)[
                'id' => 1,
                'nombre' => 'Suscripción Clásica',
                'descripcion' => 'Acceso a vinos clásicos, ideal para los que disfrutan de una selección tradicional.',
                'precio_mensual' => 1500,
            ],
            (object)[
                'id' => 2,
                'nombre' => 'Suscripción Premium',
                'descripcion' => 'Disfruta de vinos premium seleccionados de las mejores bodegas.',
                'precio_mensual' => 3000,
            ]
        ];*/
        return view('home.misuscripcion', compact('clubes'));
    }

    public function formsuscripcion(Club $club)
    {
        return view('home.suscripcion-detail', compact('club'));
    }

    public function asesoria()
    {
        return view('home.asesoria');
    }

    public function asesoriaDetail()
    {
        return view('home.asesoria-detail');
    }

    public function asesoriaRequest(Request $request)
    {
        // Validar y almacenar los datos del formulario de asesoría
        $data = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            // Otros campos
        ]);

        // Aquí guardar los datos en la base de datos o enviar notificaciones
        // Ejemplo: AsesoriaRequest::create($data);

        return redirect()->back()->with('success', 'Ud será contactado por la bodega en 24 horas.');
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
        return view('home.vinos', ['vinos' => $vinos]);
    }

    public function detallevino($id)
    {
        $vino = Vino::findOrFail($id);
        $blogs = Blog::all(); // Obtiene todos los blogs

        return view('home.detallevino', compact('vino', 'blogs')); // Pasa el vino y los blogs a la vista
    }

    public function comprar(Request $request, $id)
    {
        session()->flash('success', 'Su compra se realizó con éxito.');
        return redirect()->route('vinos.show', $id);
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
        //return $request->all();
        $request->validate([
            'club' => 'required',
            'nombre' => 'required',
            'email' => 'required',
        ]);

        $inscripcion = Suscripcion::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'tipo' => $request->club,
        ]);

        $inscripcion->save();

        return redirect()->route('home.suscripcion')->with('success', 'Incripcion creado con éxito.');
    }
}
