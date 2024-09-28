<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        //dd("logeand");
        //aca llegan los datos 


        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Obtener el usuario por su email
        $user = User::where('email', $request->email)->first();



        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            // Iniciar la sesión manualmente

            Auth::login($user);


            if ($user->rol == 'Administrador') {
                // si usuario es administrador
                // Redirigir al dashboard con sesión activa
                return redirect()->route('dashboard')->with('success', 'Sesión iniciada correctamente.');
            } else if ($user->rol == 'Usuario') {
                //si usuario es usuario
                // Redirigir al dashboard con sesión activa
                return redirect()->route('dashboard')->with('success', 'Sesión iniciada correctamente.');
            }




            // Redirigir al dashboard con sesión activa
            return redirect()->route('dashboard')->with('success', 'Sesión iniciada correctamente.');
        }

        // Si falla, redirigir de vuelta con un mensaje de error
        return back()->with('error', 'Credenciales incorrectas.');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        //Auth::logout();

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
        //return redirect('/');
    }
}
