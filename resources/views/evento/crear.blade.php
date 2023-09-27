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
                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del evento</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $evento->nombre }}">
                        </div>
                        
                        <div class="mb-3 ">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $evento->descripcion }}">
                        </div>
                        
                        <label for="tipo" class="form-label">Modalidad del Evento</label>
                        <select class="form-select" id="tipo" name="tipo" value="{{ $evento->tipo }}">
                            <option value="presencial">Presencial</option>
                            <option value="virtual">Virtual</option>
                            <option value="presencial/virtual">Presencial/Virtual   </option>
                        </select>
                        
                        <div class="mb-3">
                            <label for="f_evento" class="form-label">Fecha del evento</label>
                            <input type="date" class="form-control" id="f_evento" name="f_evento" value="{{ $evento->f_evento }}">
                        </div>


                        <div class="mb-3">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $evento->direccion }}">
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion" class="form-label">Ubicacion</label>
                            <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $evento->ubicacion }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="link" class="form-label">Enlace</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{ $evento->link }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen">
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    

</body>
</html>