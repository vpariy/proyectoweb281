@extends('template.logeado')

@section('contenido')

<div class="container col ">
    <h1>Crear Nuevo Artículo</h1>

    <div class="container-fuild row justify-content-center">
        <form action="{{ route('articulo.registra') }}" method="POST" class="col-4" enctype="multipart/form-data">
            @method('POST')
            @csrf
            
            @include('articulo.datos')    

            <button type="submit" class="btn btn-primary">Guardar Artículo</button>
        </form>
    </div>
</div>


@endsection








