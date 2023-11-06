@extends('template.logeado')

@section('contenido')

<div class="p-1 col">
    <h1>Edita evento</h1>


    <div class="container-fuild row justify-content-center">
        <form action="{{ route('evento.actualiza', $evento) }}" method="POST" class="col-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            @include('evento.datos')

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    
    </div>
</div>


@endsection


