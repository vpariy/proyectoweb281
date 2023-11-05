<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>bienvenida</title>

    <!-- Link de los estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+JSMs6ik/1KvoevJtDqV2KceSXC5tmY6Dm2f00drlioml5G5" crossorigin="anonymous"></script>

</head>

<body>



    <!-- Barra de navegación -->

    @include('partial.navlogout')

    <!-- Contenido de la página -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.derechoenzapatillas.com/wp-content/uploads/2019/08/FireShot-Capture-003-Ministerio-Público-Procuración-General-de-la-Suprema-Corte-de-Justi_-www.mpba_.gov_.ar_-750x374.png" class="d-block w-100" alt="Imagen 1">
            </div>

            <div class="carousel-item">
                <img src="https://www.gob.mx/cms/uploads/article/main_image/78972/PORTADA_BLOG_denuncia.jpg" class="d-block w-100" alt="Imagen 2">
            </div>

            <div class="carousel-item">
                <img src="https://www.sunedu.gob.pe/wp-content/uploads/2020/06/atencion-de-denuncias-enlace-1.jpg" class="d-block w-100" alt="Imagen 3">
            </div>

            <div class="carousel-item">
                <img src="https://img.freepik.com/vector-gratis/gerentes-diminutos-dibujos-animados-altavoz-gigante-computadora-portatil-ilustracion-plana_74855-16816.jpg" class="d-block w-100" alt="Imagen 4">
            </div>
        </div>
        <!-- Controles del carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>




    <div class="container mt-5 mb-5">
        <div class="card-header text-center mb-3">
            <h1>Eventos proximos</h1>
        </div>

        <div class="card-group">
            @if (!empty($eventos) && count($eventos) > 0)
            @for ($i = 0; $i < count($eventos); $i++) @if ($i % 3==0) </div>
                <div class="card-group">
                    @endif
                    <div class="card border-info mb-3" style="max-width: 34rem;">
                        <div class="card-header d-flex justify-content-between">
                            <p class="card-text"><small class="text-muted">Modalidad {{ $eventos[$i]->tipo }}</small></p>
                            <a href="{{ $eventos[$i]->link }}" class="btn btn-outline-info"><i class="fas fa-info-circle"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $eventos[$i]->nombre }}</h5>
                            <p class="card-text">{{ $eventos[$i]->descripcion }}</p>
                            <p class="card-text"><small class="text-muted">Dia del evento: {{ $eventos[$i]->f_evento }}</small></p>
                        </div>
                    </div>
                    @endfor
                    @else
                    <p>No hay eventos disponibles.</p>
                    @endif
                </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="card-header text-center mb-3">
            <h1 class="text-center p-3">Articulos</h1>
        </div>

        <table class="table">
            <div class="container">
                <div class="row justify-content-md-center">
                    @if (isset($articulos))
                    @foreach($articulos as $articulo)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset($articulo->img_art) }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $articulo->nombre_art }}</h5>
                                    <p class="card-text">{{ $articulo->desc_art }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p>No hay artículos disponibles.</p>
                    @endif
                </div>
            </div>
        </table>
    </div>

    <!-- FOOTER -->
    <footer>
        <p>Todos los derechos reservados © 2023</p>
    </footer>

    <script>
        // Inicializa el carrusel con un intervalo de 2 segundos
        $('#carouselExample').carousel({
            interval: 2000
        });
    </script>

    <!-- Asegúrate de incluir jQuery en tu proyecto -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Configura jQuery para incluir el token CSRF en todas las solicitudes AJAX
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#obtener-ubicacion').on('click', function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var latitud = position.coords.latitude;
                        var longitud = position.coords.longitude;
                        @auth
                        var id_usuario = {
                            {
                                auth() - > user() - > id_usuario
                            }
                        };
                        console.log('ID de Usuario: ' + id_usuario);
                        @else
                        console.log('Usuario no autenticado.');
                        alert('Usuario no autenticado. Por favor, inicie sesión.');
                        @endauth

                        console.log('Latitud: ' + latitud + ', Longitud: ' + longitud);

                        // Enviar la ubicación al servidor usando jQuery y la ruta alerta.store
                        $.ajax({
                            url: "{{ route('alerta.store') }}",
                            method: 'POST',
                            data: {
                                idUsuario: id_usuario,
                                latitud: latitud,
                                longitud: longitud
                            },
                            success: function(response) {
                                console.log(response);
                                // Puedes mostrar una alerta con la respuesta del servidor
                                alert('Ubicación recibida y guardada correctamente.');
                            },
                            error: function(error) {
                                console.error(error);
                                // Mostrar una alerta si hay un error en la solicitud
                                alert('Error al enviar la ubicación al servidor.');
                            }
                        });
                    });
                } else {
                    console.log('Geolocalización no es soportada por este navegador.');
                }
            });
        });
    </script>

</body>

</html>