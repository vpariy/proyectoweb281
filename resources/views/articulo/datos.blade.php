<div class="mb-3">
    <label for="nombre">Titulo de articulo</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $articulo->nombre }}" required >
</div>

<div class="mb-3">
    <label for="autor">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor" value="{{ $articulo->autor }}" required></textarea>
</div>

<div class="mb-3">
    <label for="resumen">Resumen</label>
    <textarea class="form-control" id="resumen" name="resumen" rows="3"  required>{{ $articulo->resumen }}</textarea>
</div>

<div class="mb-3">
    <label for="archivo">Documento</label>
    <input type="file" class="form-control" id="archivo" name="archivo"  required>
</div>