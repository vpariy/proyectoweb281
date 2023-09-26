
<form method="POST" action="{{ route('centro_ayuda.store') }}">
    @csrf
    <!-- Campos para el centro -->

    
        <label for="nombre_centro" >Nombre del centro</label>
        <input type="text"  id="nombre_centro" name="nombre_centro" value="{{ old('nombre_centro', $centro_ayuda->nombre_centro) }}">
        <label for="nombre_centro" >Descripcion</label>
        <input type="text"  id="descripcion" name="descripcion" value="{{ old('descripcion', $centro_ayuda->descripcion) }}">
    

        <!-- Campos de dirección -->
        <div id="direcciones">
            <div class="direccion">
                <label for="direccion_1">Dirección 1:</label>
                <input type="text" name="direcciones[]" id="direccion_1">
            </div>
        </div>
        <button type="button" id="agregarDireccion">Agregar Dirección</button>

        <!-- Campos de contacto -->

        <div id="contactos">
            <div class="contacto">
                <label for="contacto_1">Contacto 1:</label>
                <input type="text" name="contactos[]" id="contacto_1">
            </div>
        </div>
        <button type="button" id="agregarContacto">Agregar Contacto</button>
<br>
<button type="submit">Guardar</button>
</form>



<script>

    document.addEventListener('DOMContentLoaded', function () {
    let contadorDirecciones = 1;
    const direccionesDiv = document.getElementById('direcciones');
    const agregarDireccionBtn = document.getElementById('agregarDireccion');
    
    agregarDireccionBtn.addEventListener('click', function () {
        contadorDirecciones++;
        const nuevaDireccion = document.createElement('div');
        nuevaDireccion.classList.add('direccion');
        nuevaDireccion.innerHTML = `
            <label for="direccion_${contadorDirecciones}">Dirección ${contadorDirecciones}:</label>
            <input type="text" name="direcciones[]" id="direccion_${contadorDirecciones}">
        `;
        direccionesDiv.appendChild(nuevaDireccion);
    });
    });

  document.addEventListener('DOMContentLoaded', function () {
    let contadorContactos = 1;
    const contactosDiv = document.getElementById('contactos');
    const agregarContactoBtn = document.getElementById('agregarContacto');
    
    agregarContactoBtn.addEventListener('click', function () {
        contadorContactos++;
        const nuevoContacto = document.createElement('div');
        nuevoContacto.classList.add('contacto');
        nuevoContacto.innerHTML = `
            <label for="contacto_${contadorContactos}">Contacto ${contadorContactos}:</label>
            <input type="text" name="contactos[]" id="contacto_${contadorContactos}">
        `;
        contactosDiv.appendChild(nuevoContacto);
    });
    });

</script>