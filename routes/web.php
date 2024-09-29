<?php

use App\Http\Controllers\AsesoriaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriaAsesoriaController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

    // Rutas de Vinos
    Route::resource('vinos', VinoController::class)->names('vinos');
    // Rutas de Blog
    Route::resource('blogs', BlogController::class)->names('blogs');

    Route::resource('clubs', ClubController::class)->names('clubs');

    Route::resource('suscripciones', SuscripcionController::class)->names('suscripciones');

    Route::resource('categoria_asesorias', CategoriaAsesoriaController::class)->names('categoria_asesorias');



    // Rutas de administración del perfil (solo para administradores)
    Route::middleware('can:admin')->group(function () {
        Route::get('/admin/profile', [ProfileController::class, 'adminIndex'])->name('admin.profile.index');
        Route::get('/admin/profile/{user}/edit', [ProfileController::class, 'adminEdit'])->name('admin.profile.edit');
        Route::put('/admin/profile/{user}', [ProfileController::class, 'adminUpdate'])->name('admin.profile.update');
        Route::delete('/admin/profile/{user}', [ProfileController::class, 'adminDestroy'])->name('admin.profile.destroy');
    });

    Route::resource('asesorias', AsesoriaController::class)->names('asesorias');
});

Route::get('/publicacionesblogs', [HomeController::class, 'home'])->name('publicacionblog.index'); // Cambiado a 'home'
Route::get('/publicaciones/{blog}', [HomeController::class, 'showBlog'])->name('publicaciones.show');

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});


Route::get('/clubes', [HomeController::class, 'clubes'])->name('clubes');
Route::get('home.formsuscripcion/{club}', [HomeController::class, 'formsuscripcion'])->name('home.formsuscripcion');

Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');


Route::get('/categoria', [HomeController::class, 'categoriaasesoria'])->name('categoria');
Route::get('home.asesoria/{categoria}', [HomeController::class, 'formAsesoria'])->name('home.asesoria');
Route::post('home.asesoria', [HomeController::class, 'registrarAsesoria'])->name('home.registrarasesoria');


Route::get('/listavinos', [HomeController::class, 'listavinos'])->name('listavinos');
Route::get('/home.vino/{vino}', [HomeController::class, 'detallevino'])->name('listavinos.show');

Route::post('/home.vino.comprar/{vino}', [HomeController::class, 'comprar'])->name('vinos.comprar');
Route::post('/home.inscripcion', [HomeController::class, 'registrarInscripcion'])->name('home.inscripcion');
