{!!Form::open(array('url'=>'almacen/categoria','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
  <div class="form-group">
    <input type="text" class="form-control" name="searchText" placeholder="buscar .." value="">
    <span class="input-group-btn">
      <button type="submit" class="btn btn-primary">Buscar</button> 
    </span>
  </div>
</div>

{{Form::close()}}
