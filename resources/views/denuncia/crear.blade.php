<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Denuncias</title>

    <!-- Link de los estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <!-- Barra de navegación -->
    @include('partial.navlogout')
    <br>
    <br>
    <br>

    <!-- Contenido del formulario de denuncias y datos del agresor -->
    <div class="container">
        <form method="POST" action="{{ route('denuncia.registra') }}">
            @csrf

            <div class="row">
                <!-- Columna para los campos de denuncias -->
                <div class="col-md-4">
                    <h2 class="text-center">Formulario de Denuncias</h2>
                    <!-- Campos del formulario para ingresar datos de denuncias -->
                    <div class="mb-3">
                        <label for="nombre_denunciante" class="form-label">Nombre del Denunciante</label>
                        <input type="text" class="form-control" id="nombre_denunciante" name="nombre_denunciante" required>
                    </div>
                    <div class="mb-3">
                        <label for="anonimo" class="form-label">Anónimo</label>
                        <select class="form-select" id="anonimo" name="anonimo" required>
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" required>
                    </div>
                    <div class="mb-3">
                        <label for="ci" class="form-label">CI</label>
                        <input type="text" class="form-control" id="ci" name="ci" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_agresion" class="form-label">Fecha de Agresión</label>
                        <input type="date" class="form-control" id="fecha_agresion" name="fecha_agresion" required>
                    </div>
                </div>

                <!-- Columna para los campos de datos del agresor -->
                <div class="col-md-4">
                    <h2 class="text-center">Datos del Agresor</h2>
                    <!-- Campos del formulario para ingresar datos del agresor -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Agresor</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción del Agresor</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion_agresion" class="form-label">Descripción de la Agresión</label>
                        <textarea class="form-control" id="descripcion_agresion" name="descripcion_agresion" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="archivos_prueba" class="form-label">Archivos de Prueba Relacionados</label>
                        <input type="file" class="form-control" id="archivos_prueba" name="archivos_prueba">
                    </div>
                </div>

                <div class="col-md-4">
                    <h2 class="text-center">Datos de la Víctima</h2>
                    <!-- Campos del formulario para ingresar datos de la víctima -->
                    <div class="mb-3">
                        <label for="nombre_victima" class="form-label">Nombre de la Víctima</label>
                        <input type="text" class="form-control" id="nombre_victima" name="nombre_victima" required>
                    </div>
                    <div class="mb-3">
                        <label for="edad_victima" class="form-label">Edad de la Víctima</label>
                        <input type="number" class="form-control" id="edad_victima" name="edad_victima" required>
                    </div>
                    <div class="mb-3">
                        <label for="sexo_victima" class="form-label">Sexo de la Víctima</label>
                        <select class="form-select" id="sexo_victima" name="sexo_victima" required>
                            <option value="0">Masculino</option>
                            <option value="1">Femenino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="estado_victima" class="form-label">Estado de la Víctima</label>
                        <textarea class="form-control" id="estado_victima" name="estado_victima" rows="4" required></textarea>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Enviar Denuncia</button>
        </form>
    </div>


    <!-- FOOTER -->
    <footer>
        <p>Todos los derechos reservados © 2023</p>
    </footer>

</body>

</html>