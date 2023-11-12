<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Centro de Ayuda</title>

    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>

<body>
    @include('partial.nav')

    <div class="container-fluid">
        <div class="row flex-nowrap">
            @include('partial.navlateral')

            <!-- Contenido -->
            <div class="p-1 col">
                <h1 class="text-center p-3">Editar Centro de Ayuda</h1>
                <div class="container-fuild row justify-content-center">
                    <form action="{{ route('centro_ayuda.update', $centro_ayuda->id) }}" method="POST" class="col-4">
                        @csrf
                        @method('PUT')
                        
                        <!-- Campos del centro -->
                        <div class="mb-3">
                            <label for="nombre_centro">Nombre del centro</label>
                            <input type="text" class="form-control" id="nombre_centro" name="nombre_centro" value="{{ old('nombre_centro', $centro_ayuda->nombre_centro) }}">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $centro_ayuda->descripcion) }}">
                        </div>
                        <div class="mb-3">
                            <label for="img">Imagen</label>
                            <br>
                            <input type="text" class="form-control" id="img" name="img" placeholder="Ingrese el enlace de la imagen" value="{{ old('img', $centro_ayuda->img) }}">
                        </div>
                        <!-- Campos de dirección -->
                        <div id="direcciones">
                            @foreach ($centro_ayuda->direcciones as $direccion)
                            <div class="direccion">
                                <label for="direccion_{{ $direccion->id }}" class="form-label">Dirección {{ $direccion->id }}:</label>
                                <input type="text" class="form-control" name="direcciones[{{ $direccion->id }}]" id="direccion_{{ $direccion->id }}" value="{{ old('direcciones.' . $direccion->id, $direccion->direccion) }}">
                            </div>
                            @endforeach
                        </div>
                        <!-- Campos de contacto -->
                        <div id="contactos">
                            @foreach ($centro_ayuda->contactos as $contacto)
                            <div class="contacto">
                                <label for="contacto_{{ $contacto->id }}" class="form-label">Contacto {{ $contacto->id }}:</label>
                                <input type="text" class="form-control" name="contactos[{{ $contacto->id }}]" id="contacto_{{ $contacto->id }}" value="{{ old('contactos.' . $contacto->id, $contacto->contacto) }}">
                            </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>