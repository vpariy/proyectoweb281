<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>

<body>
    @include('partial.nav')

    <div class="container-fluid ">
        <div class="row flex-nowrap ">

            @include('partial.navlateral')

            <!-- Contenido -->
            <div class="p-1 col">

                <h1 class="text-center p-3">Crear Centro de Ayuda</h1>
                <div class="container-fuild row justify-content-center">
                    <form method="POST" action="{{ route('centro_ayuda.store') }}" class="col-4">
                        @csrf
                        <!-- Campos para el centro -->

                        <div class="mb-3">
                            <label for="nombre_centro" class="form-label">Nombre del centro</label>
                            <input type="text" class="form-control" id="nombre_centro" name="nombre_centro" value="{{ old('nombre_centro', $centro_ayuda->nombre_centro) }}">
                        </div>
                        <div class="mb-3">
                            <label for="nombre_centro" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $centro_ayuda->descripcion) }}">
                        </div>
                        <div class="mb-3">
                            <label for="img">Imagen</label>
                            <br>
                            <input type="text" class="form-control" id="img" name="img" value="{{ old('img', $centro_ayuda->img) }}">
                        </div>
                        <!-- Campos de dirección -->
                        <div id="direcciones">
                            <div class="direccion">
                                <label for="direccion_1" class="form-label">Dirección 1:</label>
                                <input type="text" class="form-control" name="direcciones[]" id="direccion_1">
                            </div>
                        </div>
                        <button type="button" id="agregarDireccion" class="btn btn-warning">Agregar Dirección</button>

                        <!-- Campos de contacto -->

                        <div id="contactos">
                            <div class="contacto">
                                <label for="contacto_1" class="form-label">Contacto 1:</label>
                                <input type="text" class="form-control" name="contactos[]" id="contacto_1">
                            </div>
                        </div>
                        <button type="button" id="agregarContacto" class="btn btn-warning">Agregar Contacto</button>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>




    <script src="js/bootstrap.min.js"></script>
</body>

</html>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        let contadorDirecciones = 1;
        const direccionesDiv = document.getElementById('direcciones');
        const agregarDireccionBtn = document.getElementById('agregarDireccion');

        agregarDireccionBtn.addEventListener('click', function() {
            contadorDirecciones++;
            const nuevaDireccion = document.createElement('div');
            nuevaDireccion.classList.add('direccion');
            nuevaDireccion.innerHTML = `
            <label for="direccion_${contadorDirecciones}" class="form-label">Dirección ${contadorDirecciones}:</label>
            <input type="text" class="form-control" name="direcciones[]" id="direccion_${contadorDirecciones}">
        `;
            direccionesDiv.appendChild(nuevaDireccion);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        let contadorContactos = 1;
        const contactosDiv = document.getElementById('contactos');
        const agregarContactoBtn = document.getElementById('agregarContacto');

        agregarContactoBtn.addEventListener('click', function() {
            contadorContactos++;
            const nuevoContacto = document.createElement('div');
            nuevoContacto.classList.add('contacto');
            nuevoContacto.innerHTML = `
            <label for="contacto_${contadorContactos}" class="form-label">Contacto ${contadorContactos}:</label>
            <input type="text" class="form-control" name="contactos[]" id="contacto_${contadorContactos}">
        `;
            contactosDiv.appendChild(nuevoContacto);
        });
    });
</script>