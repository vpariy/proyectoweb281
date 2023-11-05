<div class="mb-3">
    <label for="nombre" class="form-label">Nombre del evento</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $evento->nombre }}">
</div>

<div class="mb-3 ">
    <label for="descripcion" class="form-label">Descripcion</label>
    
    <textarea name="descripcion" id="descripcion"  rows="5" class="w-100 form-control">{{ $evento->descripcion }}</textarea>
</div>

<label for="tipo" class="form-label">Modalidad del Evento</label>
<select class="form-select" id="tipo" name="tipo" value="{{ $evento->tipo }}">
    <option value="presencial">Presencial</option>
    <option value="virtual">Virtual</option>
    <option value="presencial/virtual">Presencial/Virtual   </option>
</select>

<div class="mb-3">
    <label for="f_evento" class="form-label">Fecha del evento</label>
    <input type="date" class="form-control" id="f_evento" name="f_evento" value="{{ $evento->f_evento }}">
</div>


<div class="mb-3">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $evento->direccion }}">
</div>

<div class="mb-3">
    <label for="ubicacion" class="form-label">Ubicacion</label>
    <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $evento->ubicacion }}">
</div>

<div class="mb-3">
    <label for="link" class="form-label">Enlace</label>
    <input type="text" class="form-control" id="link" name="link" value="{{ $evento->link }}">
</div>

<div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen">
</div>