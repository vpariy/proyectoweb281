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
    @include('partial.nav')
    

    


    <div class="container-fluid ">
        <div class="row flex-nowrap ">
            @include('partial.navlateral')
            
            <!-- Contenido -->
            <div class="p-3 ">
                <h1>EVENTOS</h1>

                <<a href="{{ route('evento.crear') }}" class="btn btn-success m-2">Crear evento</a>


                @foreach($eventos as $evento)
                <div class="card mb-3 " style="max-width: 840px;">
                    <div class="row g-0">
                    <div class="col-md-4  d-flex justify-content-center ">
                        <img src="../imagen/descarga.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">{{ $evento->nombre }}</h5>
                        <p class="card-text">{{ $evento->descripcion }}</p>
                        <p class="card-text"><small class="text-muted">Dia del evento: {{ $evento->f_evento }}</small></p>
                        <p class="card-text"><small class="text-muted">Modalidad {{ $evento->tipo }}</small></p>
                        <div class="d-flex  justify-content-end   ">
                            <a href="" class="btn btn-primary m-2">Ver</a>
                            <a href="" class="btn btn-warning m-2 ">Editar</a>
                            <a href="" class="btn btn-danger m-2 ">Eliminar</a>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- Fin Contenido -->
        </div>
    </div>
    
</body>
</html>