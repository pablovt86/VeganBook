@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h3>Editar Articulos:{{$articulo->nombre}}</h3>
@if (count($errors)>0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach

  </ul>

</div>
@endif
</div>
</div>
{{Form::model($articulo,['method'=>'PATCH','route'=>['articulo.update',$articulo->idarticulo],'files'=>'true'])}}
{{Form::token()}}
<div class="row">
  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre"   value="{{$articulo->nombre}}" class="form-control" placeholder="Nombre...">
    </div>
  </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
  <div class="form-group">
    <label for="">Categoria</label>
    <select class="form-control" name="idcategoria">
      @foreach ($categorias as $cat)
        @if ($cat->idcategoria==$articulo->idcategoria)
        <option value="{{$cat->idcategoria}}" seleted>{{$cat->nombre}}</option>
        @else
          <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>

        @endif
      @endforeach
    </select>
  </div>
</div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
    <div class="form-group">
      <label for="codigo">Codigo</label>
      <input type="text" name="codigo"  value="{{$articulo->codigo}}" class="form-control">
    </div>
  </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
    <div class="form-group">
      <label for="stock">Stock</label>
      <input type="text" name="stock"  value="{{$articulo->stock}}" class="form-control">
    </div>
  </div>

<div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
<div class="form-group">
  <label for="descripcion">Descripcion</label>
  <input type="text" name="descricion" class="form-control" value="{{$articulo->descricion}}" placeholder="descripcion... " >
</div>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
<div class="form-group">
  <label for="imagen">Imagen</label>
  <input type="file" name="imagen" class="form-control" >
  @if (($articulo->imagen)!="")
<img src="{{asset('/imagenes/articulos/' .$articulo->imagen)}}" height="300px" width="300px">
  @endif
</div>
</div>
<div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
<div class="form-group">
  <button class="btn btn-primary" type="submit">Guardar</button>
  <button class="btn btn-danger" type="reset">Cancelar</button>

</div>
</div>

</div>
{{Form::close()}}



@endsection
