@extends('template.logeado')

@section('contenido')

<div class="col main-content">
    <h1 class="text-center mt-3">EVENTOS</h1>
    <a href="{{ route('evento.crear') }}" class="btn btn-success mb-3">Crear evento</a>
    <div class="container">
        <div class="row justify-content-md-center">
            @foreach($eventos as $evento)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="/storage/{{ $evento->archivo->nombre ?? '' }}" class="mx-auto w-75 img-fluid rounded-start d-block" alt="imagen no encontrada">
                        <h5 class="card-title">{{ $evento->nombre }}</h5>
                        <p class="card-text">{{ $evento->descripcion }}</p>
                        <p class="card-text"><small class="text-muted">Dia del evento: {{ $evento->f_evento }}</small></p>
                        <p class="card-text"><small class="text-muted">Modalidad {{ $evento->tipo }}</small></p>
                        <div class="text-end">
                            <a href="#" class="btn btn-primary">Ver</a>
                            <a href="{{ route('evento.edita', $evento) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('evento.elimina', $evento) }}" method="POST" style="display: inline;">
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

@endsection