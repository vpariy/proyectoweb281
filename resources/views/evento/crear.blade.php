<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <div class="p-1 col">
                <h1>Crear crear evento</h1>
    

                <div class="container-fuild row justify-content-center">
                    <form action="{{ route('evento.registra') }}" method="POST" class="col-4" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        
                        @include('evento.datos')

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    

</body>
</html>