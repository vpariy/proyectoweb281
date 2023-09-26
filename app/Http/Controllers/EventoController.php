<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Evento;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    public function listar() {

        $eventos = Evento::orderByDesc('f_evento')->get();
        //dd($eventos);

        return view('evento.listar', ['eventos' => $eventos]);
    }

    public function crear(Evento $evento) {
        return view('evento.crear', ['evento' => $evento]);
    }

    public function registra(Request $request) {
        
        //dd(Auth::user()->id_usuario);
        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->tipo = $request->tipo;
        $evento->f_evento = $request->f_evento;
        $evento->direccion = $request->direccion;
        $evento->ubicacion = $request->ubicacion;
        $evento->link = $request->link;
        $evento->id_usuario = Auth::user()->id_usuario;
        

        
        $evento->save();
        return redirect(route('evento.listar'));
    }


}
