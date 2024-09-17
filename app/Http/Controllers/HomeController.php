<?php



namespace App\Http\Controllers;

use App\Models\Vino;
use App\Models\Asesoria; // Reemplaza BlogPost con Asesoria o el modelo que estés usando
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.home');
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
        // Recupera un vino destacado por ID (asegúrate de que el ID exista en tu base de datos)
        $vino = Vino::find(1);

        // Recupera los últimos 5 artículos de asesoría (ajusta la cantidad si es necesario)
        $asesorias = Asesoria::latest()->take(5)->get();

        // Pasa los datos a la vista 'home.index'
        return view('home.index', [
            'vino' => $vino,
            'asesorias' => $asesorias
        ]);
    }
}
