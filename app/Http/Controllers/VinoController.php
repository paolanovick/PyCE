<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use App\Models\Blog;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    public function index()
    {
        $vinos = Vino::all();
        
        //retorna 6 registros
        return view('vinos.index', compact('vinos'));
    }

    public function show($id)
    {
        $vino = Vino::findOrFail($id);
        $blogs = Blog::all(); // Obtiene todos los blogs

        return view('vinos.show', compact('vino', 'blogs')); // Pasa el vino y los blogs a la vista
    }
}
