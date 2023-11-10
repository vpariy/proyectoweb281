<div class="mb-3">
    <label for="ap_paterno" class="form-label">Apellido paterno</label>
    <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" value="{{ $usuario->ap_paterno }}">
</div>

<div class="mb-3">
    <label for="ap_materno" class="form-label">Apellido materno</label>
    <input type="ap_materno" class="form-control" id="ap_materno" name="ap_materno" value="{{ $usuario->ap_materno }}">
</div>

<div class="mb-3">
    <label for="nombres" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $usuario->nombres }}">
</div>

<div class="mb-3">
    <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="{{ $usuario->fecha_nac }}">
</div>

<div class="mb-3">
    <label for="ci" class="form-label">Celula de identidad</label>
    <input type="ci" class="form-control" id="ci" name="ci" value="{{ $usuario->ci }}">
</div>

<label for="genero" class="form-label">Genero</label>
<select class="form-select" id="genero" name="genero" value="{{ $usuario->genero }}">
    <option value="masculino">Masculino</option>
    <option value="femenino">Femenino</option>
    <option value="otro">Otro</option>
</select>

<div class="mb-3">
    <label for="email" class="form-label">Correo electronico</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ $usuario->email }}">
</div>

<div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" value="{{ $usuario->password }}">
</div>


@auth

<label for="rol" class="form-label">Rol</label>


<select class="form-select" id="rol" name="rol" >
@if( $usuario->id_rol == 1 )
<option value="1" selected>Administrador</option>
<option value="2" >Encargado</option>
<option value="3">Usuario</option>

@elseif( $usuario->id_rol == 2 )

<option value="1" >Administrador</option>
<option value="2" selected>Encargado</option>
<option value="3">Usuario</option>

@elseif( $usuario->id_rol == 3 )

<option value="1" >Administrador</option>
<option value="2" >Encargado</option>
<option value="3" selected>Usuario</option>

@else

<option value="1" >Administrador</option>
<option value="2" >Encargado</option>
<option value="3" selected>Usuario</option>

@endif

@endauth

</select>
<br>
<br>