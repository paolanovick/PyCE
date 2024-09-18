<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Muestra una lista de blogs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10); // Puedes ajustar el número de artículos por página
        return view('blog.index', compact('blogs'));
    }

    /**
     * Muestra los detalles de un blog específico.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }
}
