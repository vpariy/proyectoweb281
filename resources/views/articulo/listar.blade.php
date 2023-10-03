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



    <div class="container-fluid">
        <div class="row flex-nowrap">
            @include('partial.navlateral')

            <div class="col mt-4">
                <h1 class="text-center mb-4">ARTÍCULOS</h1>

                <a href="{{ route('articulo.crear') }}" class="btn btn-success mb-3 ">Crear artículo</a>

                <div class="container">
                    <div class="row justify-content-md-center">
                        @foreach($articulos as $articulo)
                        <div class="col-md-6" >

                            <div class="card" >
                                <img src="{{ asset($articulo->img_art) }}" class="card-img-top" alt="..." width="300" height="300">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $articulo->nombre_art }}</h5>
                                    <p class="card-text">{{ $articulo->desc_art }}</p>
                                    <div class="text-end">
                                        <a href="#" class="btn btn-primary">Ver</a>
                                        <a href="#" class="btn btn-warning">Editar</a>
                                        <form action="{{ route('articulo.destroy', $articulo) }}" method="POST" style="display: inline;">
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
                <div class="card-group">

                </div>
            </div>



        </div>
    </div>


</body>

</html>