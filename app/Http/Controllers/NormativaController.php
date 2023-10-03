<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Evento;
use App\Models\Archivo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class NormativaController extends Controller
{
    public function listar() {
        

        return view('normativa.listar');
    }
}
