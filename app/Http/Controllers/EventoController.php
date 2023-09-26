<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Evento;

class EventoController extends Controller
{
    public function listar() {

        $eventos = Evento::orderByDesc('f_evento')->get();
        //dd($eventos);

        return view('evento.listar', ['eventos' => $eventos]);
    }
}
