<?php

namespace App\Http\Controllers;

use App\Models\Centro_ayuda;
use App\Models\Contacto;
use App\Models\Direccion;
use Illuminate\Http\Request;

class CentroAyudaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centro_ayudas = Centro_ayuda::with('direcciones','contactos')->get();
        return view('centro_ayuda.index',compact('centro_ayudas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $centro_ayuda=new Centro_ayuda();
        return view('centro_ayuda.create',compact('centro_ayuda'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_centro' => 'required|string|max:255',
            'descripcion'=>'required|string|max:255',
            'direcciones.*' => 'required|string|max:255',
            'contactos.*' => 'required|string|max:255',
        ]);
    
        // Crear un nuevo centro
        $centro = new Centro_ayuda([
            'nombre_centro' => $request->input('nombre_centro'),
            'descripcion' => $request->input('descripcion'),
        ]);
    
        $centro->save();
    
        // Almacenar las direcciones relacionadas
        foreach ($request->input('direcciones') as $direccionData) {
            $direccion = new Direccion([
                'direccion' => $direccionData,
            ]);
    
            $centro->direcciones()->save($direccion);
        }
        // Almacenar los contactos 
        foreach ($request->input('contactos') as $contactoData) {
            $contacto = new Contacto([
                'contacto' => $contactoData,
            ]);
    
            $centro->contactos()->save($contacto);
        }
    
        return redirect()->route('centro_ayuda.index')->with('success', 'Centro y direcciones creados exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Centro_ayuda $centro_ayuda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Centro_ayuda $centro_ayuda)
    {
        return view('centro_ayuda.edit',compact('centro_ayuda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Centro_ayuda $centro_ayuda)
    {
            // Validar los datos del formulario
            $request->validate([
                'nombre_centro' => 'required|string|max:255',
                'descripcion'=>'required|string|max:255',
                'direcciones.*' => 'required|string|max:255',
                'contactos.*' => 'required|string|max:255',
            ]);
    
            // Actualizar el centro
            $centro_ayuda->update([
                'nombre_centro' => $request->input('nombre_centro'),
                'descripcion' => $request->input('descripcion'),
            ]);
    
            // Actualizar las direcciones relacionadas
            foreach ($request->input('direcciones') as $direccionId => $direccionData) {
                $direccion = Direccion::find($direccionId);
    
                if ($direccion) {
                    $direccion->update([
                        'direccion' => $direccionData,
                    ]);
                }
            }
              // Actualizar los contactos relacionadas
              foreach ($request->input('contactos') as $contactoId => $contactoData) {
                $contacto = Contacto::find($contactoId);
    
                if ($contacto) {
                    $contacto->update([
                        'contacto' => $contactoData,
                    ]);
                }
            }
    
            return redirect()->route('centro_ayuda.index')->with('success', 'Centro y direcciones actualizados exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centro_ayuda $centro_ayuda)
    {
        // Eliminar las direcciones relacionadas del centro
    $centro_ayuda->direcciones()->delete();
    $centro_ayuda->contactos()->delete();       
    // Eliminar el centro
    $centro_ayuda->delete();

    return redirect()->route('centro_ayuda.index')->with('success', 'Centro y direcciones eliminados exitosamente.');
    }
}
