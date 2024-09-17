<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VinoController;
use App\Http\Controllers\AsesoriaController;
use App\Http\Controllers\SuscripcionController;

// Página de inicio


Route::get('/', [HomeController::class, 'index'])->name('home');


// Página Nosotros
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');

// Páginas de Suscripción
Route::get('/suscripcion', [HomeController::class, 'suscripcion'])->name('suscripcion');
Route::get('/suscripcion/{id}', [HomeController::class, 'suscripcionDetail'])->name('suscripcion.detail');
Route::post('/suscripcion', [HomeController::class, 'suscripcionRequest'])->name('suscripcion.request');

// Páginas de Asesoría
Route::get('/asesoria', [HomeController::class, 'asesoria'])->name('asesoria');
Route::get('/asesoria/{id}', [HomeController::class, 'asesoriaDetail'])->name('asesoria.detail');
Route::post('/asesoria', [HomeController::class, 'asesoriaRequest'])->name('asesoria.request');

// Páginas de Vinos
Route::get('/vinos', [VinoController::class, 'index'])->name('vinos.index');
Route::get('/vinos/{id}', [VinoController::class, 'show'])->name('vinos.show');
