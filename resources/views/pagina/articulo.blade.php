@extends('template.nologeado')

@section('contenido')

<div class="container mt-5 mb-5">
    <div class="card-header text-center mb-3">
        <h1 class="text-center p-3">Articulos</h1>
    </div>
    <div class="container">
        <div class="row">
            @if (isset($articulos))
            @foreach($articulos as $articulo)
            <div class="col-md-6 mb-3">
                <div class="card border-primary">
                    @if ($articulo->archivo)
                    <img src="{{ Storage::url($articulo->archivo->nombre) }}" alt="Imagen del Artículo">
                    @else
                    <!-- Manejar el caso en el que el artículo no tiene un archivo asociado -->
                    <p>...</p>
                    @endif
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="card-title">{{ $articulo->nombre }}</h5>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text">{{ $articulo->resumen }}</p>
                            </li>
                            <li class="list-group-item">
                                <div class=" d-flex justify-content-between">
                                    <p class="card-text"><small class="text-muted">Autor: {{ $articulo->autor }}</small></p>
                                    <p class="card-text"><small class="text-muted">Fecha: {{ substr( $articulo->created_at, 0, 10) }}</small></p>
                                    <a href="{{ route('articulo.descargar', $articulo) }}" class="btn btn-outline-info"><i class="bi bi-cloud-arrow-down"></i> Descargar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p class="col-md-12">No hay artículos disponibles.</p>
            @endif
        </div>
    </div>
</div>
@endsection