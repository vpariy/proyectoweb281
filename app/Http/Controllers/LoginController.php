<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect('dashboard');
        }

        return redirect('login');

    }

    public function logout(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    public function create(Usuario $usuario){
        return view('login.registre', ['usuario' => $usuario]);
    }

    public function store(Request $request) {
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
