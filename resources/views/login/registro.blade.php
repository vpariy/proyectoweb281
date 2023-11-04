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
    <div class="row justify-content-space-between">
        <a href="/" class="btn btn-info ">Inicio</a>
        <h1 class="text-center p-3">Crear usuario</h1>
    </div>
    <div class="container-fuild row justify-content-center">
        <form action="{{ route('login.registrar') }}" method="POST" class="col-4">
            @method('POST')
            @csrf
            @include('usuario.datos')
            <div class="row justify-content-space-between">

                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

    </div>

</body>

</html>