<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        //$usuarios = Usuario::all();
        
        $usuarios = Usuario::orderByDesc('updated_at')->get();
        //dd($usuarios);

        return view('usuario.listar', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Usuario $usuario)
    {
        return(view('usuario.crear', ['usuario' => $usuario]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   //dd($request);

        
        $usuario = new Usuario();
        $usuario->ap_paterno = $request->ap_paterno;
        $usuario->ap_materno = $request->ap_materno;
        $usuario->nombres = $request->nombres;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->fecha_nac = $request->fecha_nac;
        $usuario->ci = $request->ci;
        $usuario->genero = $request->genero;

        $usuario->save();
        return redirect(route('usuario.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {   //dd($usuario);
        return view('usuario.editar', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {   
        $usuario->ap_paterno = $request->ap_paterno;
        $usuario->ap_materno = $request->ap_materno;
        $usuario->nombres = $request->nombres;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->fecha_nac = $request->fecha_nac;
        $usuario->ci = $request->ci;
        $usuario->genero = $request->genero;
        
        $usuario->save();
        return redirect(route('usuario.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento, Request $request)
    {   
        
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


        $usuario->delete();

        return back();
    }
}
