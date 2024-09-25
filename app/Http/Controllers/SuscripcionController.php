<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        dd("a");
        $clubes = [
            (object)[
                'id' => 1,
                'nombre' => 'Suscripción Clásica',
                'descripcion' => 'Acceso a vinos clásicos, ideal para los que disfrutan de una selección tradicional.',
                'precio_mensual' => 1500,
            ],
            (object)[
                'id' => 2,
                'nombre' => 'Suscripción Premium',
                'descripcion' => 'Disfruta de vinos premium seleccionados de las mejores bodegas.',
                'precio_mensual' => 3000,
            ]
        ];
        return view('suscripciones.index', ['clubes' => $clubes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
