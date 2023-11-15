<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denuncias2;
use App\Models\Datos_agresors;
use App\Models\Datos_victima;
use App\Models\DatosAgresors;

use App\Models\Archivo;
use App\Models\Denuncia_archivos;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class DenunciaController extends Controller
{
    public function crear()
    {
        // Muestra el formulario para crear una denuncia
        return view('denuncia.crear');
    }

    public function registra(Request $request)
    {   //dd($request->file('archivos_prueba'));
        //dd($request);


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

            // Nuevos campos de la víctima
            'nombre_victima' => 'required|string',
            'edad_victima' => 'required|integer',
            'sexo_victima' => 'required|boolean',
            'estado_victima' => 'required|string',
        ]);

        // Crea una nueva instancia de Datos_agresors
        $datos_agresors = Datos_agresors::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'descripcion_agresion' => $request->input('descripcion_agresion'),
            'archivos_prueba' => $request->input('archivos_prueba'),
        ]);

        $datos_victima = Datos_victima::create([
            'nombre' => $request->input('nombre_victima'),
            'edad' => $request->input('edad_victima'),
            'sexo' => $request->input('sexo_victima'),
            'estado' => $request->input('estado_victima'),
        ]);

        // Crea una nueva instancia de Denuncias2
        $denuncias2 = Denuncias2::create([
            'nombre_denunciante' => $request->input('nombre_denunciante'),
            'anonimo' => $request->input('anonimo'),
            'edad' => $request->input('edad'),
            'ci' => $request->input('ci'),
            'fecha_agresion' => $request->input('fecha_agresion'),
            'revisado' => 0,
            'datos_agresors_id' => $datos_agresors->id, // Asocia la denuncia con los datos del agresor
            'datos_victima_id' => $datos_victima->id, // Relación con la víctima

        ]);

        if ($request->hasFile('archivos')) {
            // Obtiene la lista de archivos
            $archivos = $request->file('archivos');
            //dd($archivos);

            // Itera sobre cada archivo y realiza las operaciones necesarias
            foreach ($archivos as $documento) {
                
                $archivo = new Archivo();
                $archivo->save();

                $nombre_documento = $archivo->id_archivo . "." . $documento->extension();
                $archivo->nombre = $nombre_documento;
                $documento->storeAs('', $nombre_documento, 'public');
                $archivo->save();

                $den_archivo = new Denuncia_archivos();
                $den_archivo->save();

                $den_archivo->id_denuncia = $denuncias2->id;
                $den_archivo->id_archivo = $archivo->id_archivo;

                $den_archivo->save();       
                
            }

        }



        return redirect()->route('denuncia.crear')->with('success', 'Denuncia creada exitosamente');
    }

    public function listar()
    {
        $denuncias2 = Denuncias2::with('datos_agresors')->orderByDesc('id')->get();


        return view('denuncia.listar', ['denuncias2' => $denuncias2]);
    }

    public function revisado(Request $request, $id)
    {
        $denuncia = Denuncias2::find($id);
        $denuncia->revisado = $request->input('revisado') == 1;
        $denuncia->save();

        return redirect()->back()->with('success', 'Estado de revisión actualizado correctamente');
    }

    public function actualizarRevisado($id, Request $request)
    {
        $denuncia = Denuncias2::find($id);
        if (!$denuncia) {
            return response()->json(['message' => 'Denuncia no encontrada'], 404);
        }

        $revisado = $request->input('revisado', 0);
        $denuncia->revisado = $revisado;
        $denuncia->save();

        return response()->json(['message' => 'Estado revisado actualizado']);
    }

    public function descargar(Denuncias2 $denuncia2)
    {   //dd($denuncia2);
        $id_denuncia = $denuncia2->id;
        //dd($id_denuncia);

        $denuncias = Denuncia_archivos::where('id_denuncia', $id_denuncia)->get();


        $archivosZip = storage_path('app\archivos\archivos.zip');
        //dd($archivosZip);
        // Crea un archivo ZIP
        $zip = new \ZipArchive();


        if ($zip->open($archivosZip, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
            
            foreach ($denuncias as $denuncia) {
                $name = $denuncia->archivo->nombre;
                
                $archivoNombre = $name;
                
                $zip->addFile(storage_path('app\public\\') . $name, $archivoNombre);

            }

            $zip->close();

        }

        return response()->download($archivosZip)->deleteFileAfterSend(true);

       
    }
}
