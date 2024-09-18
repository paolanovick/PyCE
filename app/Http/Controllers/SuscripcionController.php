<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Models\Suscripcion;


class SuscripcionController extends Controller
{
    public function index()
    {
        // Obtener todos los clubes de vinos
        $clubes = Club::all(); // Asegúrate de que el modelo Club esté definido y configurado correctamente

        // Pasar la variable $clubes a la vista
        return view('home.suscripcion', ['clubes' => $clubes]);
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
