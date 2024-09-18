<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    public function index()
    {
        $vinos = Vino::all(); // O cualquier lógica para obtener los vinos
        return view('vinos.index', compact('vinos'));
    }

    public function show($id)
    {
        $vino = Vino::findOrFail($id);
        return view('vinos.show', compact('vino'));
    }
}
