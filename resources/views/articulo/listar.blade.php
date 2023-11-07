@extends('template.logeado')

@section('contenido')

<div class="col">
    <h1 class="text-center mt-3">ARTÍCULOS</h1>

    <div class="container text-center">
    
    <a href="{{ route('articulo.crear') }}" class="btn btn-success mb-3 ">Crear artículo</a>
    
    <div class="row row-cols-3">
    
        @foreach($articulos as $articulo)
        
        <div class="card text-end" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $articulo->nombre }}</h5>
                <p class="card-text">{{ $articulo->resumen }}</p>
                
                <p class="card-text"><small class="text-body-secondary">{{ $articulo->autor }}</small>
                <p class="card-text"><small class="text-body-secondary">{{ $articulo->created_at }}</small>
                
                <div class="col">
                    <a href="{{ route('articulo.descargar', $articulo) }}" class="btn btn-success">Descargar</a>
                    <a href="{{ route('articulo.editar', $articulo) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('articulo.destroy', $articulo) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>

            </div>
        </div>

        @endforeach

    </div>
    </div>

</div>


@endsection



