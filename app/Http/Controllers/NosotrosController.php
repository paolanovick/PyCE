<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    /**
     * Mostrar la vista de la página "Nosotros".
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('nosotros'); // Asegúrate de que esta vista exista en resources/views
    }
}
