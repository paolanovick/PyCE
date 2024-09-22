<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VinoController;
use App\Http\Controllers\AsesoriaController;
use App\Http\Controllers\SuscripcionController;
use App\Http\Controllers\ClubController;

// Página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas de Blog
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');

// Página de Nosotros
Route::get('/nosotros', [NosotrosController::class, 'nosotros'])->name('nosotros');
// Rutas de Suscripción
Route::get('/suscripcion', [SuscripcionController::class, 'index'])->name('suscripcion.index');
Route::get('/suscripcion/{id}', [SuscripcionController::class, 'show'])->name('suscripcion.show');
Route::post('/suscripcion', [SuscripcionController::class, 'store'])->name('suscripcion.store');


// Mostrar todas las asesorías
Route::get('/asesoria', [AsesoriaController::class, 'index'])->name('asesoria.index');

// Mostrar una asesoría específica
Route::get('/asesoria/{id}', [AsesoriaController::class, 'show'])->name('asesorias.show');

// Mostrar el formulario de solicitud de asesoría
Route::get('/asesorias/{id}/request', [AsesoriaController::class, 'request'])->name('asesorias.request');

// Almacenar la solicitud de asesoría
Route::post('/asesorias/store', [AsesoriaController::class, 'store'])->name('asesoria.store');




// Rutas de Vinos
Route::get('/vinos', [VinoController::class, 'vinos'])->name('vinos.index');
Route::get('/vinos/{id}', [VinoController::class, 'show'])->name('vinos.show');
Route::post('/vinos/{id}/comprar', [VinoController::class, 'comprar'])->name('vinos.comprar');


// Rutas de Club
Route::post('/club', [ClubController::class, 'store'])->name('club.store');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
