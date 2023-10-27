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
    <div class="container-fluid ">
        <div class="row flex-nowrap ">
            @include('partial.navlateral')

            <div class="card-body main-content">
                <h1 class="text-center mb-4 ">NORMATIVAS</h1>

                <a href="{{ route('normativa.crear') }}" class="btn btn-success mb-3 ">Crear normativa</a>
                <div class="accordion" id="normativasAccordion">

                    <!-- Normativa -->
                    @foreach($leyes as $ley)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="normativa{{ $ley->id }}Heading">
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#eliminarLey{{ $ley->id }}" title="Eliminar Ley">Eliminar</button>
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa{{ $ley->id }}" aria-expanded="false" aria-controls="normativa{{ $ley->id }}">
                                {{ $ley->titulo }}
                            </button>
                        </h2>
                        <div id="normativa{{ $ley->id }}" class="accordion-collapse collapse" aria-labelledby="normativa{{ $ley->id }}Heading" data-bs-parent="#normativasAccordion">
                            <div class="accordion-body">
                                {{ $ley->descripcion }}
                            </div>
                        </div>
                    </div>

                    <!-- Modal para confirmar eliminación -->
                    <div class="modal fade" id="eliminarLey{{ $ley->id }}" tabindex="-1" aria-labelledby="eliminarLey{{ $ley->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="eliminarLey{{ $ley->id }}Label">Confirmar eliminación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Estás seguro de que deseas eliminar la ley "{{ $ley->titulo }}"?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('normativa.eliminar', ['ley' => $ley->id]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" >Eliminar</button>
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

</body>

</html>