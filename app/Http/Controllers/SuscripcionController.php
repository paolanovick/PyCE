<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    public function index()
    {
        return view('home.suscripcion');
    }

    public function show($id)
    {
        // Lógica para mostrar los detalles de suscripción
        return view('home.suscripcion-detail', ['id' => $id]);
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos de suscripción
        // Lógica para manejar la suscripción

        return redirect()->back()->with('success', '¡Te has suscrito al club de vinos!');
    }
}
