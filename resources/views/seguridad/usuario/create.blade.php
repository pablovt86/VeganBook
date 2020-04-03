@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h3>Nuevas Usuario</h3>
@if (count($errors)>0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach

  </ul>

</div>
@endif
{!!Form::open(array('url'=> 'seguridad/usuario','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div id="segundaParte">  <!-- formulario standar -->
  <div class="form-group row"> <!-- name -->
      <label for="name" class="col-md-4 col-form-label text-md-right" style= "color:black">{{ ('NOMBRE:') }}</label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control r" name="name" value="{{ old('name') }}" >
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  





  <div class="form-group row"> <!-- email -->
      <label for="email" class="col-md-4 col-form-label text-md-right"style= "color:black" >{{ ('EMAIL:') }}</label>
      <div class="col-md-6">
          <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" 
        >
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>
  

  
  <div class="form-group row"> <!-- pasword -->
      <label for="password" class="col-md-4 col-form-label text-md-right"style= "color:black" >{{ ('CONTRASEÑA') }}</label>
      <div class="col-md-6">
          <input id="password" type="password" class="form-control " name="password" >
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>
  <div class="form-group row"> <!-- rePassword -->
      <label for="rePassword" class="col-md-4 col-form-label text-md-right"style= "color:black" >{{ ('CONFIRMAR CONTRASEÑA') }}</label>
      <div class="col-md-6">
          <input id="rePassword" type="password" class="form-control" name="password_confirmation" >
          @error('password_confirmation')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      </div>
  </div> 
<div class="form-group">
  <button class="btn btn-primary" type="submit">Guardar</button>
  <button class="btn btn-danger" type="reset">Cancelar</button>

</div>

{!!Form::close()!!}


  </div>

</div>
@endsection
