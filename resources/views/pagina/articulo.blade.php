@extends('template.nologeado')

@section('contenido')


<div class="col">
    <h1 class="text-center mt-3">ARTÍCULOS</h1>

    <div class="container text-center">
    
    
    <div class="row row-cols-3">
    
        @foreach($articulos as $articulo)
        
        <div class="card text-end" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $articulo->nombre }}</h5>
                <p class="card-text">{{ $articulo->resumen }}</p>
                
                <p class="card-text"><small class="text-body-secondary">Autor: {{ $articulo->autor }}</small>
                <p class="card-text"><small class="text-body-secondary">Fecha: {{ substr( $articulo->created_at, 0, 10) }}</small>
                
                <div class="col">
                    <a href="{{ route('articulo.descargar', $articulo) }}" class="btn btn-success">Descargar documento</a>
                    
                </div>

            </div>
        </div>

        @endforeach

    </div>
    </div>

</div>




@endsection




