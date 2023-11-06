@extends('template.logeado')

@section('contenido')




<div class="col main-content">
    <h1 class="text-center mt-3">ARTÍCULOS</h1>
    <a href="{{ route('articulo.crear') }}" class="btn btn-success mb-3 ">Crear artículo</a>
    <div class="container">
        <div class="row justify-content-md-center">
            @foreach($articulos as $articulo)
            <div class="col-md-6">
                <div class="card">
                    <img src="" class="card-img-top" alt="imagen no encontrada" width="300" height="300">
                    <div class="card-body">
                        <h5 class="card-title">{{ $articulo->nombre }}</h5>
                        <p class="card-text">{{ $articulo->resumen }}</p>
                        <div class="text-end">
                            <a href="#" class="btn btn-primary">Ver</a>
                            <a href="{{ route('articulo.editar', $articulo) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('articulo.destroy', $articulo) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="card-group">

    <div class="card-group">

        @foreach($articulos as $articulo)       
        <div class="card border-info mb-3" style="max-width: 34rem;">
            <div class="card-header d-flex justify-content-between">
                <p class="card-text"><small class="text-muted">Modalidad  </small></p>
                <a href="" class="btn btn-outline-info"><i class="fas fa-info-circle"></i></a>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $articulo->nombre }}</h5>
                <p class="card-text">{{ $articulo->resumen }}</p>
                <p class="card-text"><small class="text-muted">{{ $articulo->created_at }}</small></p>
            </div>
        </div>
        @endforeach
        
    </div>
</div>


@endsection



