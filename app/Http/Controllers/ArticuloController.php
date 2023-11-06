<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Articulo;
use App\Models\Archivo;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticuloController extends Controller
{
    public function listar()
    {
        $articulos = Articulo::orderByDesc('created_at')->get();

        //return view('articulo.listar', compact('articulos'));
        return view('articulo.listar', ['articulos' => $articulos]);
    }

    public function crear(Articulo $articulo)
    {
        return view('articulo.crear', ['articulo' => $articulo]);
    }

    public function registra(Request $request)
    {   //dd($request);


        // Guarda la imagen en storage (puedes personalizar esto según tus necesidades)
        //$imagenNombre = $request->file('img_art')->store('imagenes/articulos', 'public');

        // Crea un nuevo objeto Articulo con los datos del formulario
        $articulo = new Articulo([
            'nombre' => $request->get('nombre'),
            'autor' => $request->get('autor'),
            'resumen' => $request->get('resumen'),
            // Agrega más campos según sea necesario
        ]);

        // Guarda el nuevo artículo en la base de datos
        $articulo->save();

        $archivo = new Archivo();
        $documento = $request->file('archivo');
        $archivo->save();

        $nombre_documento = $archivo->id_archivo . "." . $documento->extension();
        $archivo->nombre = $nombre_documento;

        $documento->storeAs('', $nombre_documento, 'public');
        $archivo->save();

        $articulo->id_archivo = $archivo->id_archivo;
        $articulo->save();


        // Redirecciona a la vista de lista de artículos o a donde desees
        return redirect()->route('articulo.listar')->with('success', 'Artículo creado exitosamente');
    }

    public function destroy(Articulo $articulo)
    {
        /* if ($articulo->img_art) {
            $rutaImagen = 'public/' . $articulo->img_art;
            Storage::delete($rutaImagen);
            // Para depuración
            //dd($rutaImagen); // Esto imprimirá la ruta, verifica que sea correcta
        } */

        $articulo->delete();

        return redirect()->route('articulo.listar')->with('success', 'Artículo eliminado exitosamente');
    }

    public function editar(Articulo $articulo)
    {
        return view('articulo.editar', compact('articulo'));
    }


public function actualizar(Request $request, Articulo $articulo)
{
    // Validación de datos, ajusta las reglas según tus necesidades
    $request->validate([
        'nombre_art' => 'required|string|max:255',
        'desc_art' => 'required|string',
        'img_art' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Puedes ajustar las reglas para las imágenes
    ]);

    // Actualiza los campos del artículo
    $articulo->nombre_art = $request->get('nombre_art');
    $articulo->desc_art = $request->get('desc_art');

    // Si se proporciona una nueva imagen, la actualiza
    if ($request->hasFile('img_art')) {
        // Elimina la imagen anterior si existe
        if ($articulo->img_art) {
            $rutaImagen = 'public/' . $articulo->img_art;
            Storage::delete($rutaImagen);
        }

        // Guarda la nueva imagen
        $imagenNombre = $request->file('img_art')->store('imagenes/articulos', 'public');
        $articulo->img_art = $imagenNombre;
    }

    // Guarda los cambios en la base de datos
    $articulo->save();

    // Redirecciona a la vista de lista de artículos o a donde desees
    return redirect()->route('articulo.listar')->with('success', 'Artículo actualizado exitosamente');
}

}
