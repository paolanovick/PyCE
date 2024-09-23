<?php

use App\Http\Controllers\AsesoriaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriaAsesoriaController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuscripcionController;
use App\Http\Controllers\VinoController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

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

Route::get('/categoriaasesoria', [CategoriaAsesoriaController::class, 'index'])->name('categoriaasesoria.index');
Route::get('/categoriaasesoria/{id}', [CategoriaAsesoriaController::class, 'show'])->name('categoriaasesorias.show');

// Rutas de Vinos
Route::get('/vinos', [VinoController::class, 'vinos'])->name('vinos.index');
Route::get('/vinos/{id}', [VinoController::class, 'show'])->name('vinos.show');
Route::post('/vinos/{id}/comprar', [VinoController::class, 'comprar'])->name('vinos.comprar');

// Rutas de Club
Route::post('/club', [ClubController::class, 'store'])->name('club.store');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
