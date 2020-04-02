@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h3>Nuevas Cliente</h3>
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
{!!Form::open(array('url'=> 'ventas/cliente','method'=>'Post','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" required  value="{{old('nombre')}}" class="form-control" placeholder= "nombre..">
    </div>
  </div>
  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
    <div class="form-group">
      <label for="nombre">direccion</label>
      <input type="text" name="dirreccion" value="{{old('direccion')}}" class="form-control" placeholder="direccion..">
    </div>
  </div>
  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
    <div class="form-group">
      <label for="nombre">Documento</label>
<select class="form-control" name="tipo_documento">
  <option value="Dni">DNI</option>
  <option value="RUC">RUC</option>
  <option value="PASS">PASS</option>
</select>
</div>
  </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
  <div class="form-group">
    <label for="num_documento">Numero documento</label>
    <input class="form-control" name="num_documento" value="{{old('num_documento')}}" placeholder="num_documento...">
  </div>
</div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
    <div class="form-group">
      <label for="telefono">Telefono</label>
      <input type="text" name="telefono"  value="{{old('telefono')}}" class="form-control" placeholder="telefono...">
    </div>
  </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email"  value="{{old('email')}}" class="form-control" placeholder="email..">
    </div>
  </div>

<div class="col-lg-6 col-sm-6 col-md-6 col-sx-12">
<div class="form-group">
  <button class="btn btn-primary" type="submit">Guardar</button>
  <button class="btn btn-danger" type="reset">Cancelar</button>

</div>
</div>

</div>
{!!Form::close()!!}



@endsection
