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
    @include('partial.navlogout')





    <!-- Contenido de la página -->
    <div class="p-1 col">

        <h1 class="text-center p-3">Listar Centros de Ayuda</h1>
        <table class="table">

            <thead class="table-info">
                <tr>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">DIRECCIONES</th>
                    <th scope="col">CONTACTOS</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($centro_ayudas as $centro_ayuda)
                <tr>
                    <td> {{$centro_ayuda->nombre_centro}} </td>
                    <td> {{$centro_ayuda->descripcion}} </td>
                    <td>
                        @foreach($centro_ayuda->direcciones as $direccion)
                        {{$direccion->direccion}}
                        <br>
                        @endforeach
                    </td>
                    <td>
                        @foreach($centro_ayuda->contactos as $contacto)
                        {{$contacto->contacto}}
                        <br>
                        @endforeach
                    </td>

                </tr>

                @endforeach

            </tbody>
        </table>



    </div>

    <!-- FOOTER -->
    <footer>
        <p>Todos los derechos reservados © 2023</p>
    </footer>



</body>

</html>

</body>

</html>