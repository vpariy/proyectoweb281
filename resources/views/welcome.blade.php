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
    
    @include('partial.nav')

    <pre>{{ Auth::user() }}</pre>
    <br>
    <a href="{{ route('usuario.index') }}" class="btn btn-success">Listar ususarios</a>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid justify-content-center">
        <div class="row justify-content-center align-items-center ">
            <div class="col-1">
                <a class="navbar-brand " href="#"><img src="https://tse1.mm.bing.net/th?id=OIP.IWCjQ0V8j0jploUPqhX6ZAHaDQ&pid=Api&P=0&w=300&h=300" alt="Logo" style="width: 150px; height: 50px;"></a>
            </div>
            
            <div class="col-10">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panel de articulos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panel de eventos</a>
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
            
            <div class="col-1">
                    <div class="row">
                        <div class="col-5">
                            <a class="navbar-brand align-items-center" href="#"><img src="img/photo_user.png" alt="Logo" style="width: 50px; height: 50px; border-radius: 50%"></a>
                        </div>
                        
                        <div class="col-2 collapse navbar-collapse" >
                            <tr>
                                <td>Nombre </td>
                                <td>Apellido </td>
                                <br>
                                <td>user@correo.com</td>
                            </tr>
                        </div>
                    </div>
            </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>  
    </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container mt-5 mb-5">
    <div class="card-header text-center mb-3"><h1>Eventos proximos</h1></div>
    
        <div class="card text-center mb-2">
        <div class="card-body">
            <h5 class="card-title">Evento Online</h5>
            <p class="card-text">Evento sobre charla de seguridad en las escuelas y universidades.</p>
            <a href="#" class="btn btn-primary">Link del la runion o ubicación</a>
        </div>
        </div>
        
        <div class="card text-center mb-2">
        <div class="card-body">
            <h5 class="card-title">Evento Online</h5>
            <p class="card-text">Evento sobre charla de seguridad en las escuelas y universidades.</p>
            <a href="#" class="btn btn-primary">Link del la runion o ubicación</a>
        </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <p>Todos los derechos reservados © 2023</p>
    </footer>

    
    
    </body>
    </html>

</body>
</html>