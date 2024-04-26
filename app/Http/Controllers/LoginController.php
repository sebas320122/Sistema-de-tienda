<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function redirigir(){
        return redirect()->route('show.acceder');
    }

    public function showAcceder(){
        return view('acceder');
    }
    
    public function iniciarSesion(Request $request): RedirectResponse{
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('pv');
        }else{
            return back()->withErrors([
                'email' => 'El correo o contraseña son invalidos',
            ])->onlyInput('email');
        }
        
    }

    public function cerrarSesion(Request $request): RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('acceder');
    }
}
