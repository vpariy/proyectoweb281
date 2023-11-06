@extends('template.logeado')

@section('contenido')

<style>
        #cuerpo {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        #titulo {
            background-color: #39A7FF;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        h1 {
            margin: 0;
        }
        .event-info {
            width: 60%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .event-info h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .event-info p {
            color: #555;
        }
        .event-info .date {
            color: #ff6600;
            font-weight: bold;
        }
         
        #autor {
            background-color: #39A7FF;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
</style>    

<div id= "cuerpo" class="p-1 col">    

    <div id="titulo">
        <h1>{{ $evento->nombre }}</h1>
    </div>

    <div>
    <img src="/storage/{{ $evento->archivo->nombre ?? '' }}" class="mx-auto w-50 img-fluid rounded-start d-block" alt="imagen no encontrada">
    </div>

    <div class="event-info">
        <h4>{{ $evento->descripcion }}</h4>
        <br>
        <p><span class="date">Modalidad:</span> {{ $evento->tipo }}</p>
        <p><span class="date">Fecha:</span> {{ $evento->f_evento }}</p>        
        

        @if($evento->tipo == 'presencial')
        <p><span class="date">Direccion:</span> {{ $evento->direccion }}</p>
        <p><span class="date">Ubicacion:</span> <a href="{{ $evento->ubicacion }}"  target="_blank" class="btn btn-info">Abrir con Google Maps</a></p>
        @elseif($evento->tipo == 'virtual')
        <p><span class="date">Enlace:</span> <a href="{{ $evento->link }}"  target="_blank" class="btn btn-warning">Enlace de Reunion</a></p>
        @else
        <p><span class="date">Direccion:</span> {{ $evento->direccion }}</p>
        <p><span class="date">Ubicacion:</span> <a href="{{ $evento->ubicacion }}"  target="_blank" class="btn btn-info">Abrir con Google Maps</a></p>
        <p><span class="date">Enlace:</span> <a href="{{ $evento->link }}"  target="_blank" class="btn btn-warning">Enlace de Reunion</a></p>
        @endif


        
    </div>

    <div id="autor">
        <p>&copy; 2023 </p>
    <div>
</div>


@endsection