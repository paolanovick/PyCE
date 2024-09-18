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
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Página de Nosotros
Route::get('/nosotros', [NosotrosController::class, 'nosotros'])->name('nosotros');

// Rutas de Suscripción
Route::get('/suscripcion', [SuscripcionController::class, 'index'])->name('suscripcion.index');
Route::get('/suscripcion/{id}', [SuscripcionController::class, 'show'])->name('suscripcion.show');
Route::post('/suscripcion', [SuscripcionController::class, 'store'])->name('suscripcion.store');

// Rutas de Asesoría
Route::get('/asesoria', [AsesoriaController::class, 'index'])->name('asesoria.index');
Route::get('/asesoria/{id}', [AsesoriaController::class, 'show'])->name('asesoria.show');
Route::post('/asesorias', [AsesoriaController::class, 'store'])->name('asesorias.store');

// Rutas de Vinos
Route::get('/vinos', [HomeController::class, 'vinos'])->name('vinos');
Route::get('/vinos/{id}', [VinoController::class, 'show'])->name('vinos.show');

// Rutas de Club
Route::post('/club', [ClubController::class, 'store'])->name('club.store');
