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

    <h1>Crear Usuario</h1>
    

    <h1 class="text-center p-3">Crear usuario</h1>

    <div class="container-fuild row justify-content-center">
        <form action="{{ route('usuario.store') }}" method="POST" class="col-4">
            @csrf
            @method('POST')
            @include('usuario.datos')
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    
    </div>

</body>
</html>