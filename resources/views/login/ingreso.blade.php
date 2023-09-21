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

    <h1 class="text-center p-3">Iniciar Sesion</h1>

    <div class="container-fuild row justify-content-center">
        <form action="{{ route('login.valida') }}" method="POST" class="col-3">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Correo electronico</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Iniciar</button>
           
            
          </form>
    </div>
    <br>
    <div class="container-fuild row justify-content-center">
      <a href="{{ route('login.registro') }}" class="btn btn-success col-2 ">Registro</a>
    </div>
    

</body>
</html>