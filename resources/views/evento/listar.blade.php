<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Link de los estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Barra lateral -->
            @include('partial.navlateral')
            <!-- Contenido principal -->
            <div class="col main-content">
                <h1 class="text-center mt-3">EVENTOS</h1>
                <a href="{{ route('evento.crear') }}" class="btn btn-success mb-3">Crear evento</a>

                @if(Auth::user()->id_rol == 1)
                    <span>Es administrador</span>
                @elseif( Auth::user()->id_rol == 2)
                    <span>Es Encargado</span>
                @else
                    <span>Es Usuario</span>
                @endif

                <div class="container">
                    <div class="row justify-content-md-center">
                        @foreach($eventos as $evento)
                        <div class="col-md-6">
                            <div class="card">
                                <img src="/storage/{{ $evento->archivo->nombre ?? '' }}" class="card-img-top" alt="..." width="300" height="300">
                                <div class="card-body">
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
        </div>
    </div>
</body>

</html>