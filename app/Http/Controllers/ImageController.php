<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Muestra la lista de imágenes.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    /**
     * Muestra el formulario para crear una nueva imagen.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Almacena una nueva imagen en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required|string|max:255',
            'path' => 'required|string|max:255',
            'alt_text' => 'nullable|string|max:255',
        ]);

        Image::create($request->all());

        return redirect()->route('images.index')->with('success', 'Imagen creada con éxito.');
    }

    /**
     * Muestra los detalles de una imagen específica.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\View\View
     */
    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }

    /**
     * Muestra el formulario para editar una imagen.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\View\View
     */
    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    /**
     * Actualiza una imagen existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Image $image)
    {
        $request->validate([
            'filename' => 'required|string|max:255',
            'path' => 'required|string|max:255',
            'alt_text' => 'nullable|string|max:255',
        ]);

        $image->update($request->all());

        return redirect()->route('images.index')->with('success', 'Imagen actualizada con éxito.');
    }

    /**
     * Elimina una imagen de la base de datos.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Image $image)
    {
        $image->delete();

        return redirect()->route('images.index')->with('success', 'Imagen eliminada con éxito.');
    }
}
