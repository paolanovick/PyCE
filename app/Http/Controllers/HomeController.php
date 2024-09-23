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
        $blogs = Blog::latest()->take(3)->get();
        //dd($blogs);
        return view('home', compact('blogs')); // Pasar la variable a la vista
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
}
