<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesoriaController extends Controller
{
    public function index()
    {
        return view('home.asesoria');
    }

    public function show($id)
    {
        // Lógica para mostrar los detalles de asesoría
        return view('home.asesoria-detail', ['id' => $id]);
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos de asesoría
        // Lógica para manejar la inscripción a la asesoría

        return redirect()->back()->with('success', '¡Te contactaremos en 24 horas!');
    }
}
