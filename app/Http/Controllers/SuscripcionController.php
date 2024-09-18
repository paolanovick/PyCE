<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suscripcion;

class SuscripcionController extends Controller
{
    public function index()
    {
        $suscripciones = Suscripcion::all(); // Recupera todas las suscripciones de la base de datos
        return view('home.suscripcion', compact('suscripciones')); // Pasa los datos a la vista
    }

    // app/Http/Controllers/SuscripcionController.php
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:suscripciones,email',
        ]);

        Suscripcion::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('success', '¡Te has suscrito exitosamente!');
    }

}
