<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenida</title>

    <!-- Link de los estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
    

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid justify-content-center">
        <div class="row justify-content-center align-items-center ">
            <div class="col-1">
                <a class="navbar-brand " href="#"><img src="img/descarga_denuncia.png" alt="Logo" style="width: 150px; height: 50px;"></a>
            </div>
            
            <div class="col-10">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panel de articulos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pagina.principal') }}">Panel de eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">¿Denuncia?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Centros de Ayuda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Questionario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panel de denuncias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Control de usuarios</a>
                        </li>                    
                    </ul>
                </div>
            </div>
            
            <div class="col ">
                <a href="login/ingreso" class="btn btn-success m-0">Ingreso</a>
                
            </div>
                
        </div>  
    </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container mt-5 mb-5">
    <div class="card-header text-center mb-3"><h1>Eventos proximos</h1></div>

        @foreach($eventos as $evento)
        <div class="card text-center mb-2">
        <div class="card-body" >
            <div class="  align-items-center justify-content-center " >
                <img src="/storage/{{ $evento->archivo->nombre ?? '' }}" class="img-fluid rounded-start" alt="">
            </div>
            <h5 class="card-title">{{ $evento->nombre }}</h5>
            <p class="card-text">{{ $evento->descripcion }}</p>
            <p class="card-text"><small class="text-muted">Dia del evento: {{ $evento->f_evento }}</small></p>
            <p class="card-text"><small class="text-muted">Modalidad {{ $evento->tipo }}</small></p>
            <a href="{{ $evento->link }}" class="btn btn-primary">Link del la runion o ubicación</a>
        </div>
        </div>
        @endforeach

    </div>

    <!-- FOOTER -->
    <footer>
        <p>Todos los derechos reservados © 2023</p>
    </footer>

    
    
    </body>
    </html>

</body>
</html>