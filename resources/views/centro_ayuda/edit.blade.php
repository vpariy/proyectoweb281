
    
    <form action="{{ route('centro_ayuda.update', $centro_ayuda->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Campos del centro -->
        <label for="nombre_centro" >Nombre del centro</label>
        <input type="text"  id="nombre_centro" name="nombre_centro" value="{{ old('nombre_centro', $centro_ayuda->nombre_centro) }}">
        <label for="nombre_centro" >Descripcion</label>
        <input type="text"  id="descripcion" name="descripcion" value="{{ old('descripcion', $centro_ayuda->descripcion) }}">
        <!-- Campos de dirección -->
        <div id="direcciones">
            @foreach ($centro_ayuda->direcciones as $direccion)
                <div class="direccion">
                    <label for="direccion_{{ $direccion->id }}">Dirección {{ $direccion->id }}:</label>
                    <input type="text" name="direcciones[{{ $direccion->id }}]" id="direccion_{{ $direccion->id }}" value="{{ old('direcciones.' . $direccion->id, $direccion->direccion) }}">
                </div>
            @endforeach
        </div>
        <!-- Campos de contacto -->
        <div id="contactos">
            @foreach ($centro_ayuda->contactos as $contacto)
                <div class="contacto">
                    <label for="contacto_{{ $contacto->id }}">Contacto {{ $contacto->id }}:</label>
                    <input type="text" name="contactos[{{ $contacto->id }}]" id="contacto_{{ $contacto->id }}" value="{{ old('contactos.' . $contacto->id, $contacto->contacto) }}">
            @endforeach
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>

