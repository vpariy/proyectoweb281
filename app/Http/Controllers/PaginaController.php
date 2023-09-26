<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evento;
class PaginaController extends Controller
{
    public function principal() {

        $eventos = Evento::orderByDesc('f_evento')->get();
        //dd($eventos);

        return view('pagina.principal', ['eventos' => $eventos]);

    }
}
