<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Centros de Ayuda</title>

    <!-- Link de los estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <!-- Barra de navegación -->
    @include('partial.navlogout')

    <!-- Contenido de la página -->
    <div class="p-1 col">

        <h1 class="text-center p-3">Centros de Ayuda</h1>

        @foreach ($centro_ayudas as $centro_ayuda)
        <div class="modal fade" id="centroAyudaModal{{ $centro_ayuda->id }}" tabindex="-1" aria-labelledby="centroAyudaModalLabel{{ $centro_ayuda->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content align-items-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="centroAyudaModalLabel{{ $centro_ayuda->id }}">{{ $centro_ayuda->nombre_centro }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body align-items-center">
                        <img src="{{ asset($centro_ayuda->img) }}" alt="Imagen del centro de ayuda" class="img-fluid mb-3">
                        <p>{{ $centro_ayuda->descripcion }}</p>
                        <h6>Direcciones:</h6>
                        @foreach($centro_ayuda->direcciones as $direccion)
                        <p>{{ $direccion->direccion }}</p>
                        @endforeach
                        <h6>Contactos:</h6>
                        @foreach($centro_ayuda->contactos as $contacto)
                        <p data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $contacto->contacto }}">
                            <i class="fas fa-info-circle"></i> {{ $contacto->contacto }}
                        </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-ligth" data-bs-toggle="modal" data-bs-target="#centroAyudaModal{{ $centro_ayuda->id }}">
            <img src="{{ asset($centro_ayuda->img) }}" alt="Imagen del centro de ayuda" class="img-fluid mb-3" style="max-width: 300px;">
        </button>
        @endforeach

    </div>

    <!-- FOOTER -->
    <footer>
        <p>Todos los derechos reservados © 2023</p>
    </footer>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html>