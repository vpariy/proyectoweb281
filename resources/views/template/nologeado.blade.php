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
    
</head>

<body>



    <!-- Barra de navegación -->

    @include('partial.navlogout')

    <!-- Contenido de la página -->
    
    @yield('contenido')



    

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
                    var id_usuario = {{ auth()->user()->id_usuario }};
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



    <script>
        var botmanWidget = {
            frameEndpoint: '/botman/chat',
            chatServer: '/botman',
            introMessage: '¡Hola! ¿En qué puedo ayudarte hoy?',
            chatId: 'botman-chat',
            title: 'ChatBot Informativo',
            mainColor: '#62CEF1',
            bubbleBackground: '#62CEF1',
            aboutText: '',
            aboutLink: '',
            placeholderText:'Envia un mensaje...',
            //aboutText: 'Start the conversation with Hi',

        };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>

</html>