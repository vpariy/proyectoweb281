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

            <div class="container ">
                <h1>Crear Nuevo Artículo</h1>

                <div class="container-fuild row justify-content-center">
                    <form action="{{ route('articulo.registra') }}" method="POST" class="col-4" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="mb-3">
                            <label for="nombre_art">Nombre del Artículo</label>
                            <input type="text" class="form-control" id="nombre_art" name="nombre_art" required>
                        </div>
                        <div class="mb-3">
                            <label for="desc_art">Descripción del Artículo</label>
                            <textarea class="form-control" id="desc_art" name="desc_art" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="img_art">Imagen del Artículo</label>
                            <input type="file" class="form-control" id="img_art" name="img_art" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Artículo</button>
                    </form>
                </div>
            </div>

        </div>
    </div>






</body>

</html>