<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Articulo;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticuloController extends Controller
{
    public function listar()
    {
        $articulos = Articulo::orderByDesc('id_art')->get();

        return view('articulo.listar', compact('articulos'));
    }

    public function crear()
    {
        return view('articulo.crear');
    }

    public function registra(Request $request)
    {


        // Guarda la imagen en storage (puedes personalizar esto según tus necesidades)
        $imagenNombre = $request->file('img_art')->store('imagenes/articulos', 'public');

        // Crea un nuevo objeto Articulo con los datos del formulario
        $articulo = new Articulo([
            'nombre_art' => $request->get('nombre_art'),
            'img_art' => $imagenNombre,
            'desc_art' => $request->get('desc_art'),
            // Agrega más campos según sea necesario
        ]);

        // Guarda el nuevo artículo en la base de datos
        $articulo->save();

        // Redirecciona a la vista de lista de artículos o a donde desees
        return redirect()->route('articulo.listar')->with('success', 'Artículo creado exitosamente');
    }

    public function destroy(Articulo $articulo)
    {
        if ($articulo->img_art) {
            $rutaImagen = 'public/' . $articulo->img_art;
            Storage::delete($rutaImagen);
            // Para depuración
            //dd($rutaImagen); // Esto imprimirá la ruta, verifica que sea correcta
        }

        $articulo->delete();

        return redirect()->route('articulo.listar')->with('success', 'Artículo eliminado exitosamente');
    }
}
