<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Evento;
use App\Models\Ley;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class NormativaController extends Controller
{
    public function listar()
    {
        $leyes = Ley::orderByDesc('id')->get();

        return view('normativa.listar', compact('leyes'));
    }

    public function crear()
    {
        return view('normativa.crear');
    }

    public function registra(Request $request)
    {

        // Crear una nueva instancia de la clase Ley
        $ley = new Ley([
            'titulo' => $request->get('titulo'),
            'descripcion' => $request->get('descripcion'),
            // Agrega más campos según sea necesario
        ]);

        // Guardar la ley en la base de datos
        $ley->save();

        // Redireccionar a la vista de listado de leyes o a donde desees
        return redirect()->route('normativa.listar')->with('success', 'Ley creada exitosamente');
    }

    public function eliminar(Ley $ley)
    {
        // Puedes realizar comprobaciones adicionales antes de eliminar
        $ley->delete();

        return redirect()->route('normativa.listar')->with('success', 'Ley eliminada exitosamente');
    }
}
