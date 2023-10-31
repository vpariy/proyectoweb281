<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denuncias2;
use App\Models\Datos_agresors;
use App\Models\DatosAgresors;

class DenunciaController extends Controller
{
    public function crear()
    {
        // Muestra el formulario para crear una denuncia
        return view('denuncia.crear');
    }

    public function registra(Request $request)
    {
        // Valida y almacena la denuncia en la base de datos
        $request->validate([
            'nombre_denunciante' => 'required|string',
            'anonimo' => 'required|boolean',
            'edad' => 'required|integer',
            'ci' => 'required|string',
            'fecha_agresion' => 'required|date',

            'nombre' => 'required|string',  // Datos del Agresor
            'descripcion' => 'required|string', // Datos del Agresor
            'descripcion_agresion' => 'required|string', // Datos del Agresor
            // Agrega más 
        ]);


        // Crea una nueva instancia de Datos_agresors
        $datos_agresors = Datos_agresors::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'descripcion_agresion' => $request->input('descripcion_agresion'),
            'archivos_prueba' => $request->input('archivos_prueba'),
        ]);

        // Crea una nueva instancia de Denuncias2
        $denuncias2 = Denuncias2::create([
            'nombre_denunciante' => $request->input('nombre_denunciante'),
            'anonimo' => $request->input('anonimo'),
            'edad' => $request->input('edad'),
            'ci' => $request->input('ci'),
            'fecha_agresion' => $request->input('fecha_agresion'),
            'datos_agresors_id' => $datos_agresors->id, // Asocia la denuncia con los datos del agresor
        ]);

        return redirect()->route('denuncia.crear')->with('success', 'Denuncia creada exitosamente');
    }
}
