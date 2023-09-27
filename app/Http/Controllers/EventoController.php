<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Evento;
use App\Models\Archivo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{
    public function listar() {

        $eventos = Evento::orderByDesc('f_evento')->get();
        //dd($eventos);

        return view('evento.listar', ['eventos' => $eventos]);
    }

    public function crear(Evento $evento) {
        return view('evento.crear', ['evento' => $evento]);
    }

    public function registra(Request $request) {
        
        //dd(Auth::user()->id_usuario);
        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->tipo = $request->tipo;
        $evento->f_evento = $request->f_evento;
        $evento->direccion = $request->direccion;
        $evento->ubicacion = $request->ubicacion;
        $evento->link = $request->link;
        $evento->id_usuario = Auth::user()->id_usuario;
        
        $archivo = new Archivo();
        
        $imagen = $request->file('imagen');
        $archivo->save();

        $nombre_imagen = $archivo->id_archivo . "." . $imagen->extension();
        //dd($nombre_imagen);
        $archivo->nombre = $nombre_imagen;

        $imagen->storeAs('', $nombre_imagen, 'public');
        $archivo->save();

        $evento->id_archivo = $archivo->id_archivo;
        $evento->save();
        return redirect(route('evento.listar'));
    }

    public function elimina(Evento $evento) {
        //dd($evento);
        $evento->delete();

        return back();
    }

    public function edita(Evento $evento) {
        
        return view('evento.edita', ['evento' => $evento]);
    }

    public function actualiza(Evento $evento, Request $request) {
        
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->tipo = $request->tipo;
        $evento->f_evento = $request->f_evento;
        $evento->direccion = $request->direccion;
        $evento->ubicacion = $request->ubicacion;
        $evento->link = $request->link;
        $evento->id_usuario = Auth::user()->id_usuario;
        
        $archivo = new Archivo();
        
        $imagen = $request->file('imagen');
        $archivo->save();

        $nombre_imagen = $archivo->id_archivo . "." . $imagen->extension();
        //dd($nombre_imagen);
        $archivo->nombre = $nombre_imagen;

        $imagen->storeAs('', $nombre_imagen, 'public');
        $archivo->save();

        $evento->id_archivo = $archivo->id_archivo;
        $evento->save();
        return redirect(route('evento.listar'));

    }
}
