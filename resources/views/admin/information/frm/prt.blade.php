@if ( !empty ( $information->id) )
 
<div class="form-group">
    <label for="name" class="negrita">Nombre:</label>
    <div>
        <input class="form-control" placeholder="Jugo de Fresa" required="required" name="name" type="text" id="name" value="{{ $information->name }}">
    </div>
</div>
 
<div class="form-group">
    <label for="img" class="negrita">Selecciona una imagen:</label>
    <div>
        <input name="img[]" type="file" id="img" multiple="multiple">
        <br>
        <br> 
        
        @if ( !empty ( $information->image) )
 
          <span>Imagen(es) Actual(es): </span>
          
          <br>
 
          <!-- Mensaje: Imagen Eliminada Satisfactoriamente ! -->
          @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('message') }}
            </div>
          @endif
 
          <!-- Mostramos todas las imágenes pertenecientesa a este registro -->
          @foreach($imagenes as $img)
 
            <img src="../../../uploads/{{ $img->name }}" width="200" class="img-fluid">
 
            <!-- Botón para Eliminar la Imagen individualmente -->
            <a href="{{ route('admin/information/delete', [$img->id, $information->id]) }}" class="btn btn-danger btn-sm" onclick="return confirmarEliminar();">delete</a> 
      
          @endforeach 
       
       @else 
      
       Aún no se ha cargado una imagen para este producto @endif
      
    </div>
 
</div>
 
@else

  <div class="form-group">
      <label for="name" class="negrita">Nombre:</label>
      <div>
          <input class="form-control" placeholder="information Giant" required="required" name="name" type="text" id="name">
      </div>
  </div>

  <div class="form-group">
      <label for="img" class="negrita">Selecciona una imagen:</label>
      <div>
          <input name="img[]" type="file" id="img" multiple="multiple">
      </div>
  </div>

@endif

  <button type="submit" class="btn btn-info">Guardar</button>
  {{-- <a href="{{ route('admin/information') }}" class="btn btn-warning">Cancelar</a> --}}
 