<table class="table" >
 
    <thead>
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