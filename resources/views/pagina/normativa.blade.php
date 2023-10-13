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

        <h1 class="text-center p-3">Normativas</h1>

        <!-- Normativa -->
        @foreach($leyes as $ley)
        <div class="col-8 justify-content-center container">
            <div class="accordion-item">
                <h2 class="accordion-header" id="normativa{{ $ley->id }}Heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#normativa{{ $ley->id }}" aria-expanded="false" aria-controls="normativa{{ $ley->id }}">
                        {{ $ley->titulo }}
                    </button>
                </h2>
                <div id="normativa{{ $ley->id }}" class="accordion-collapse collapse" aria-labelledby="normativa{{ $ley->id }}Heading" data-bs-parent="#normativasAccordion">
                    <div class="accordion-body">
                        {{ $ley->descripcion }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </tbody>
    </table>


    <!-- FOOTER -->
    <footer>
        <p>Todos los derechos reservados © 2023</p>
    </footer>



</body>

</html>

</body>

</html>