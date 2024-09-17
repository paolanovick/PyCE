<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    public function index()
    {
        $vinos = Vino::all();
        return view('vinos.index', compact('vinos'));
    }

    public function show($id)
    {
        $vino = Vino::findOrFail($id);
        return view('vinos.show', compact('vino'));
    }
}
