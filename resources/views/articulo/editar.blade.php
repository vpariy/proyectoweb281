@extends('template.logeado')

@section('contenido')

<div class="container col">
    <h1>Editar Artículo</h1>

    <div class="container-fuild row justify-content-center">
        <form action="{{ route('articulo.actualizar', $articulo) }}" method="POST" class="col-4" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            
            @include('articulo.datos')

            <button type="submit" class="btn btn-primary">Actualiza Artículo</button>
        </form>
    </div>
</div>


@endsection



