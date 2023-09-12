<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    @include('partial.nav')

    <h1>login</h1>
    <pre>{{ Auth::user() }}</pre>

    <h1 class="text-center p-3">Crear usuario</h1>

    <div class="container-fuild row justify-content-center">
        <form action="{{ route('usuario-crear-post') }}" method="POST" class="col-4">
        @csrf
        @method('POST')
            <div class="mb-3">
                <label for="ap_paterno" class="form-label">Apellido paterno</label>
                <input type="text" class="form-control" id="ap_paterno" name="ap_paterno">
            </div>

            <div class="mb-3">
                <label for="ap_materno" class="form-label">Apellido materno</label>
                <input type="ap_materno" class="form-control" id="ap_materno" name="ap_materno">
            </div>

            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres">
            </div>

            <div class="mb-3">
                <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac">
              </div>

            <div class="mb-3">
                <label for="ci" class="form-label">Celula de identidad</label>
                <input type="ci" class="form-control" id="ci" name="ci">
            </div>

            <label for="genero" class="form-label">Genero</label>
            <select class="form-select" id="genero" name="genero">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>

            <div class="mb-3">
              <label for="email" class="form-label">Correo electronico</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    
    </div>

</body>
</html>