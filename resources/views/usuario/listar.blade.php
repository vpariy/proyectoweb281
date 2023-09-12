<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
    <h1 class="text-center p-3">Listar Usuarios</h1>

    <a href="/usuario-crear" class="btn btn-success">Crear usuario</a>
    

    <table class="table">
        <thead class="table-info">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Paterno</th>
            <th scope="col">Materno</th>
            <th scope="col">Nombres</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Correo</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuarios as $usuario)  
          <tr>
            <th scope="row">{{ $usuario->id }}</th>
            <td>{{ $usuario->ap_paterno }}</td>
            <td>{{ $usuario->ap_materno }}</td>
            <td>{{ $usuario->nombres }}</td>
            <td>{{ $usuario->fecha_nac }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
                <form action=" {{ route('usuario-editar', $usuario) }} " method="POST">
                    @csrf
                    @method('POST')

                    <input type="submit" value="Editar" class="btn btn-warning">   
                </form>
                
                <form action=" {{ route('usuario-borrar', $usuario) }} " method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Eliminar" class="btn btn-danger">   
                </form>
            
            </td>
            
          </tr>
           @endforeach 
        </tbody>
      </table>

      <script src="js/bootstrap.min.js"></script>
</body>
</html>