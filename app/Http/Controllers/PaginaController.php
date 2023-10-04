<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Centro_ayuda;

use App\Models\Evento;
class PaginaController extends Controller
{
    public function principal() {

        $eventos = Evento::orderByDesc('f_evento')->get();
        //dd($eventos);

        return view('pagina.principal', ['eventos' => $eventos]);

    }

    public function centrosAyuda() {
        $centro_ayudas = Centro_ayuda::with('direcciones','contactos')->get();
        return view('pagina.centroayuda',compact('centro_ayudas'));
    }
}
