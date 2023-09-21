<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // este cambio lo hice
    //otro cambio
    public function ingreso() {
        
        return view('login.ingreso');

    }

    public function valida(Request $request) {
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect('dashboard');
        }

        return redirect('login/ingreso');

    }


    public function logout(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    public function registro(Usuario $usuario){
        return view('login.registro', ['usuario' => $usuario]);
    }

    public function registrar(Request $request) {
        $usuario = new Usuario();
        $usuario->ap_paterno = $request->ap_paterno;
        $usuario->ap_materno = $request->ap_materno;
        $usuario->nombres = $request->nombres;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->fecha_nac = $request->fecha_nac;
        $usuario->ci = $request->ci;
        $usuario->genero = $request->genero;

        $usuario->save();

        Auth::login($usuario);

        return redirect('dashboard');
    }
}
