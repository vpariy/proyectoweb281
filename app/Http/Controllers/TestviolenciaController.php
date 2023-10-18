<?php

namespace App\Http\Controllers;

use App\Models\Testviolencia;
use Illuminate\Http\Request;

class TestviolenciaController extends Controller
{

    public function listar(){
        $preguntas=Testviolencia::orderBy('id')->get();
        return view('questions.listar',compact('preguntas'));
    }

}
