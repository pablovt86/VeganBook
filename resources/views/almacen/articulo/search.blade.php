{!!Form::open(array('url'=>'almacen/articulo','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
  <div class="form-group">
    <input type="text" class="form-control" name="searchText" placeholder="Buscar.." value="">
    <p></p>
      <button type="submit" class="btn btn-primary">Buscar</button>
  
  </div>
</div>

{{Form::close()}}
