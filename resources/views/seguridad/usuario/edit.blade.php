@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h3>Editar Usuario:{{$usuario->name}}</h3>
@if (count($errors)>0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach

  </ul>

</div>
@endif
{{Form::model($usuario,['method'=>'PATCH','route'=>['usuario.update',$usuario->id]])}}
{{Form::token()}}
<div class="form-group">
  <label for="nombre">Nombre</label>
  <input type="text" name="name" class="form-control" value="{{$usuario->name}}" placeholder="Nombre..." value="">
</div>
<div class="form-group">
  <label for="descripcion">Email</label>
  <input type="text" name="email" class="form-control" value="{{$usuario->email}}" placeholder="Descripcion..." value="">
</div>

<div class="form-group "> <!-- pasword -->
  <label for="password" >Passwor</label>
  <input id="password" type="password" class="form-control " name="password"placeholder="PASSWORD" value="" >
     
  
</div>

<div class="form-group "> <!-- rePassword -->
  <label for="rePassword"  >Confirmar Password</label>
  <input id="rePassword" type="password" class="form-control" name="password_confirmation" placeholder="CONFIRMAR PASS..." value="" >
</div> 

<div class="form-group">
  <button class="btn btn-primary" type="submit">Guardar</button>
  <button class="btn btn-danger" type="reset">Cancelar</button>

</div>

{{Form::close()}}


  </div>

</div>
@endsection
