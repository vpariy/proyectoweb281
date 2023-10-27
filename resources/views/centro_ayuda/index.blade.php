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

  <div class="container-fluid ">
    <div class="row flex-nowrap ">
        
      @include('partial.navlateral')
    
      <!-- Contenido -->
      <div class="p-1 col main-content" >
      
        <h1 class="text-center p-3">Listar Centros de Ayuda</h1>
    <table class="table" >
    
        <thead class="table-info">
        <tr>
          <th scope="col" >NOMBRES</th>
          <th scope="col" >DESCRIPCION</th>
          <th scope="col" >DIRECCIONES</th>
          <th scope="col" >CONTACTOS</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        
          @foreach ($centro_ayudas as $centro_ayuda)
              <tr>
                  <td> {{$centro_ayuda->nombre_centro}} </td>
                  <td> {{$centro_ayuda->descripcion}} </td>
                  <td>
                    @foreach($centro_ayuda->direcciones as $direccion)
                    {{$direccion->direccion}}
                    <br>
                    @endforeach
                  </td>
                  <td>
                    @foreach($centro_ayuda->contactos as $contacto)
                    {{$contacto->contacto}}
                    <br>
                    @endforeach
                  </td>
                  <td>
                    <form action=" {{ route('centro_ayuda.edit', $centro_ayuda) }} " method="POST">
                        @csrf
                        @method('GET')

                        <input type="submit" value="Editar" class="btn btn-warning">   
                    </form>
                    
                    <form action=" {{ route('centro_ayuda.destroy', $centro_ayuda) }} " method="POST">
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Eliminar" class="btn btn-danger"
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este centro y sus direcciones relacionadas?')">   
                    </form>
                
                </td>


              </tr>
          
          @endforeach
          
      </tbody>
    </table>
    <a href="{{ route('centro_ayuda.create') }}" class="btn btn-success">Crear centro de ayuda</a>


  </div>
  </div>
</div>




<script src="js/bootstrap.min.js"></script>
</body>
</html>