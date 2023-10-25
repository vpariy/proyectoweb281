<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Centro_ayuda;
use App\Models\Testviolencia;
use App\Models\Articulo;
use App\Models\Ley;
use App\Models\Evento;

class PaginaController extends Controller
{
    public function principal() {

        $eventos = Evento::orderByDesc('f_evento')->get();
        $articulos = Articulo::orderBy('id_art')->get();
        //dd($articulos);
        return view('pagina.principal', ['eventos' => $eventos, 'articulos' => $articulos]);
    }
    

    public function centrosAyuda() {
        $centro_ayudas = Centro_ayuda::with('direcciones','contactos')->get();
        return view('pagina.centroayuda',compact('centro_ayudas'));
    }

    public function testviolencia(){
        $preguntas=Testviolencia::orderBy('id')->get();
        return view('pagina.testviolencia',compact('preguntas'));
    }

    public function articulo(){
        $articulos=Articulo::orderBy('id_art')->get();
        return view('pagina.articulo',['articulos' => $articulos]);
    }

    public function normativa(){
        $leyes = Ley::orderByDesc('id')->get();
        return view('pagina.normativa',compact('leyes'));
    }
}
