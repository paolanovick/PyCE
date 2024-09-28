<?php

use App\Http\Controllers\AsesoriaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriaAsesoriaController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\DashboardController;
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




Route::middleware('auth')->group(function () {

    //rutas para administrador y para usuario

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Rutas del perfil de usuario
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); // Ruta faltante

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::resource('vinos', VinoController::class)->names('vinos');
    Route::resource('blogs', BlogController::class)->names('blogs');

    Route::resource('clubs', ClubController::class)->names('clubs');

    Route::resource('suscripciones', SuscripcionController::class)->names('suscripciones');


    // Rutas de administración del perfil (solo para administradores)
    Route::middleware('can:admin')->group(function () {
        Route::get('/admin/profile', [ProfileController::class, 'adminIndex'])->name('admin.profile.index');
        Route::get('/admin/profile/{user}/edit', [ProfileController::class, 'adminEdit'])->name('admin.profile.edit');
        Route::put('/admin/profile/{user}', [ProfileController::class, 'adminUpdate'])->name('admin.profile.update');
        Route::delete('/admin/profile/{user}', [ProfileController::class, 'adminDestroy'])->name('admin.profile.destroy');
    });
});



Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});


Route::get('/misuscripciones', [HomeController::class, 'home'])->name('suscripciones');





// Rutas de Blog
Route::get('/publicacionesblogs', [HomeController::class, 'home'])->name('publicacionblog.index'); // Cambiado a 'home'
Route::get('/publicaciones/{id}', [HomeController::class, 'show'])->name('publicaciones.show');


Route::get('home.suscripcion', [HomeController::class, 'suscripcion'])->name('home.suscripcion');
Route::get('home.suscripcion.detail/{club}', [HomeController::class, 'formsuscripcion'])->name('home.suscripcion.detail');




// Página de Nosotros
Route::get('/nosotros', [NosotrosController::class, 'nosotros'])->name('nosotros');


// Rutas de Suscripción



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

Route::get('/listavinos', [HomeController::class, 'listavinos'])->name('listavinos');
Route::get('/homevino/{id}', [HomeController::class, 'detallevino'])->name('listavinos.show');

Route::post('/vinos/{id}/comprar', [HomeController::class, 'comprar'])->name('vinos.comprar');
//Route::get('/vinos/create', [VinoController::class, 'create'])->name('vinos.create');
//Route::post('/vinos', [VinoController::class, 'store'])->name('vinos.store');



// Rutas de Club
Route::post('/club', [ClubController::class, 'store'])->name('club.store');

// Rutas de Blog
Route::get('/publicacionesblogs', [BlogController::class, 'index'])->name('publicacionblog.index');
Route::get('/publicacionesblogs/{id}', [BlogController::class, 'show'])->name('publicacionblog.show');


Route::post('/registrar_inscripcion', [HomeController::class, 'registrarInscripcion'])->name('registrar_inscripcion');
