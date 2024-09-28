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
        // Validar los datos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Realizar una única consulta que busque al usuario con su email y verifique su rol
        $user = User::where('email', $request->email)->first();

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            // Iniciar la sesión manualmente
            Auth::login($user);

            // Redirigir según el rol del usuario
            return match ($user->rol) {
                'Administrador' => redirect()->route('dashboard')->with('success', 'Sesión iniciada correctamente como Administrador.'),
                'Usuario' => redirect()->route('dashboard')->with('success', 'Sesión iniciada correctamente como Usuario.'),
                default => back()->with('error', 'No tiene permisos para acceder.'),
            };
        }

        // Si las credenciales son incorrectas
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
