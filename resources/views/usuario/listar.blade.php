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
  <div class="container-fluid main-content">
    <div class="row flex-nowrap ">
        
      @include('partial.navlateral')
    
      <!-- Contenido -->
      <div class="p-1 col" >
      
        <h1 class="text-center p-3">Listar Usuarios</h1>

        <a href="{{ route('usuario.create') }}" class="btn btn-success">Crear usuario</a>
        

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
                <th scope="row">{{ $usuario->id_usuario }}</th>
                <td>{{ $usuario->ap_paterno }}</td>
                <td>{{ $usuario->ap_materno }}</td>
                <td>{{ $usuario->nombres }}</td>
                <td>{{ $usuario->fecha_nac }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <form action=" {{ route('usuario.edit', $usuario) }} " method="POST">
                        @csrf
                        @method('GET')

                        <input type="submit" value="Editar" class="btn btn-warning">   
                    </form>
                    
                    <form action=" {{ route('usuario.destroy', $usuario) }} " method="POST">
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Eliminar" class="btn btn-danger">   
                    </form>
                
                </td>
                
              </tr>
              @endforeach 
            </tbody>
          </table>


          </div>
        </div>
      </div>

    
    

      <script src="js/bootstrap.min.js"></script>
</body>
</html>