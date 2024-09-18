<?php



namespace App\Http\Controllers;

use App\Models\Vino;
use App\Models\Asesoria; // Reemplaza BlogPost con Asesoria o el modelo que estés usando
use Illuminate\Http\Request;
use App\Models\Blog; // Asegúrate de tener esta línea


class HomeController extends Controller
{
    public function home()
    {
        return view('home.home');
    }
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }
    public function vinos()
    {
        // Obtener la lista de vinos
        $vinos = Vino::all(); // O cualquier lógica que uses para obtener los vinos

        return view('vinos.index', ['vinos' => $vinos]);
    }


    public function nosotros()
    {
        return view('home.nosotros');
    }

    public function suscripcion()
    {
        return view('home.suscripcion');
    }

    public function suscripcionDetail()
    {
        return view('home.suscripcion-detail');
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
        // Obtener los últimos artículos del blog
        $blogArticles = [
            (object)['titulo' => 'Cómo Elegir el Vino Perfecto', 'resumen' => 'En este artículo, exploramos los factores clave para elegir el vino ideal para cualquier ocasión...'],
            (object)['titulo' => 'Los Mejores Vinos de la Temporada', 'resumen' => 'Descubre cuáles son los vinos más recomendados para esta temporada...'],
        ];

        return view('home', ['blogArticles' => $blogArticles]);
    }
}
