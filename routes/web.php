<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VinoController;
use App\Http\Controllers\AsesoriaController;
use App\Http\Controllers\SuscripcionController;

// Página de inicio


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::get('/nosotros', [NosotrosController::class, 'index']);


// Página principal de suscripciones
Route::get('/suscripcion', [HomeController::class, 'suscripcion'])->name('index');

// Detalle de una suscripción específica
Route::get('/suscripcion/{id}', [HomeController::class, 'show'])->name('suscripcion.detail');

// Almacenar una nueva suscripción
Route::post('/suscripcion', [SuscripcionController::class, 'store'])->name('suscripciones.store');


// Páginas de Asesoría
Route::get('/asesoria', [AsesoriaController::class, 'index']);
Route::get('/asesoria/{id}', [HomeController::class, 'asesoriaDetail'])->name('asesoria.detail');
Route::post('/asesorias', [AsesoriaController::class, 'store'])->name('asesorias.store');

Route::get('/vinos', [HomeController::class, 'index'])->name('vinos.index');
Route::get('/vinos/{id}', [VinoController::class, 'show'])->name('vinos.show');
