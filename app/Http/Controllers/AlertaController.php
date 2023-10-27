<?php

namespace App\Http\Controllers;

use App\Models\Alerta;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class AlertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alertas = Alerta::with('usuario', 'ubicacion')->get();
        return view('alerta.index', compact('alertas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $latitud = $request->input('latitud');
        $longitud = $request->input('longitud');
        // Crear una nueva ubicación
        $ubicacion = new Ubicacion();
        $ubicacion->latitud = $latitud;
        $ubicacion->longitud = $longitud;
        $ubicacion->save();

        // Crear una nueva alerta y asociarla con la ubicación y el usuario
        $alerta = new Alerta();
        $alerta->id_ubicacion = $ubicacion->id;
        $alerta->id_usuario = $request->input('idUsuario');
        // ... otros campos de alerta si es necesario
        $alerta->save();
    
        // Devolver una respuesta (puedes devolver un JSON u otra respuesta según tus necesidades)
        return response()->json(['mensaje' => 'Alerta y ubicación guardadas correctamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Alerta $alerta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alerta $alerta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alerta $alerta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alerta $alerta)
    {
        //
    }
}
