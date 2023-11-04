<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisión de denuncias</title>

    <!-- Link de los estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
    <style>
        .card-footer {
            border-top: none !important;
            justify-content: center !important;
        }

        .checkbox-button {
            display: inline-block;
        }

        .checkbox-button input[type="checkbox"] {
            display: none;
            /* Oculta el checkbox real */
        }

        .checkbox-button label {
            cursor: pointer;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .checkbox-button label:hover {
            background-color: #f0f0f0;
        }

        .checkbox-button input[type="checkbox"]:checked+label {
            background-color: #5cb85c;
            color: white;
            border: 1px solid #4cae4c;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Barra lateral -->
            @include('partial.navlateral')
            <!-- Contenido principal -->
            <div class="col main-content">
                <h1 class="text-center mt-3">DENUNCIAS</h1>
                <div class="container">
                    <div class="row ">
                        @foreach($denuncias2 as $denuncia2)
                        <form class="col-md-6 mb-2" action="{{ route('denuncia.revisado', $denuncia2) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card @if($denuncia2->revisado) bg-transparen border-success @endif">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="align-self-start">
                                        <h5 class="card-title">
                                            <p class="card-text @if($denuncia2->revisado) text-success @endif"><strong>Denunciante</strong></p>
                                        </h5>
                                    </div>
                                    <div class="checkbox-button">
                                        <input type="checkbox" id="revisado_{{ $denuncia2->id }}" data-id="{{ $denuncia2->id }}" name="revisado" value="1" @if($denuncia2->revisado) checked @endif>
                                        <label for="revisado_{{ $denuncia2->id }}">
                                            <i class="bi bi-pen"></i> Revisado
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><strong>Nombre:</strong> {{ $denuncia2->nombre_denunciante }}</p>
                                    <p class="card-text"><strong>Anónimo:</strong> {{ $denuncia2->anonimo ? 'Sí' : 'No' }}</p>
                                    <p class="card-text"><strong>Edad:</strong> {{ $denuncia2->edad }}</p>
                                    <p class="card-text"><strong>CI:</strong> {{ $denuncia2->ci }}</p>
                                    <p class="card-text"><strong>Fecha de Agresión:</strong> {{ $denuncia2->fecha_agresion }}</p>
                                    <div class="card-footer d-flex justify-content-between">
                                        <h5 class="card-title">
                                            <p class="card-text @if($denuncia2->revisado) text-danger @endif"><strong>Denunciado</strong></p>
                                        </h5>
                                    </div>
                                    @if ($denuncia2->datos_agresors)
                                    <p class="card-text"><strong>Nombre:</strong> {{ optional($denuncia2->datos_agresors)->nombre }}</p>
                                    <p class="card-text"><strong>Descripción:</strong> {{ optional($denuncia2->datos_agresors)->descripcion }}</p>
                                    <p class="card-text"><strong>Descripción de la Agresión:</strong>{{ optional ($denuncia2->datos_agresors)->descripcion_agresion }}</p>
                                    <p class="card-text"><strong>Archivos de Prueba:</strong> <a href="{{ optional($denuncia2->datos_agresors)->archivos_prueba }}">Material descargable</a> </p>
                                    @else
                                    <p class="card-text text-warning"><strong>Esta denuncia no tiene datos del agresor.</strong></p>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-light mt-3">Guardar</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>