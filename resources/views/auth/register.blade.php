@extends('layouts.layout')

@section('content')
<head>
    <script src="js/errores.js"></script>
    <script src="js/paises.js"></script>
    <style type="text/css">
          #Errores{
              background-color: red;
              color: black;
              font-weight: bold;
              display: none;
              font-style: italic;
              padding: 40px;
          }
          #Exitoso{
              background-color: green;
              color: black;
              font-weight: bold;
              display: none;
              font-style: italic;
              padding: 40px;
          }
      </style>
  </head>
  <body>
  <div id="Errores">
    Errores
  </div>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card" style="border: 0px"  >
                  <div class="card-header"style="background-color:#000000"><h4 style="color:white"> REGISTRATE A VENGANBOOK!</h4></div>
                  <div class="card-body" style="background-color:#141414" >
                      <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="formulario" onsubmit="return validar();">
                          @csrf
                        <div  id="primeraParte"> <!-- pais  este dato no se guardara-->
                            <label for="s-selectPaises" style="color:white">Pais</label>
                            <select name="s-selectPaises" id="s-selectPaises">
                             
                            </select>
                            <span style="color:white">solo disponible en argentina</span>
                            <br>
                            <button type="button" id="btn-siguienteSeccion">Siguiente</button>
                        </div>
                        <div id="segundaParte">  <!-- formulario standar -->
                          <div class="form-group row"> <!-- name -->
                              <label for="name" class="col-md-4 col-form-label text-md-right" style= "color:white">{{ __('Nombre') }}</label>
                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control r" name="name" value="{{ old('name') }}" >
                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row"> <!-- dirreccion  -->
                            <label for="direccion" class="col-md-4 col-form-label text-md-right" style= "color:white">{{ __('direccion') }}</label>
                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" >
                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!-- num_documento -->
                            <label for="num_documento" class="col-md-4 col-form-label text-md-right"style= "color:white">{{ __('num_documento') }}</label>
                            <div class="col-md-6">
                                <input id="num_documento" type="text" class="form-control " name="num_documento" value="{{ old('num_documento') }}" >
                                @error('num_documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!--avatar -->
                            <label for="avatar" class="col-md-4 col-form-label text-md-right" style= "color:white" > {{ __('avatar') }}</label>
                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control" name="avatar" value="{{ old('avataro') }}" >
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          <div class="form-group row"> <!-- email -->
                              <label for="email" class="col-md-4 col-form-label text-md-right"style= "color:white" >{{ __('correo') }}</label>
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
                          <div class="form-group row"> <!-- provincia  este no se guardara-->
                                  <label for="s-provincia" class="col-md-4 col-form-label text-md-right"style= "color:white" >{{ __('provincia') }}</label>
                                  <div class="col-md-6">
                                    <select name="cod_pais" id="s-provincia">
                                        </select>
                                      <!-- <select name="cod_pais" id="cod_pais">
                                       
                                      </select> -->
                                      @error('pais')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                          </div>
                          <div class="form-group row"> <!-- provincia  este no se guardara-->
                                  <label for="s-provincia" class="col-md-4 col-form-label text-md-right"style= "color:white" >{{ __('ciudad') }}</label>
                                  <div class="col-md-6">
                                    <select id="s-ciudad">
                                        </select>
                                      @error('pais')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                          </div>
                          <div class="form-group row"> <!-- Telefono -->
                                  <label for="telefono" class="col-md-4 col-form-label text-md-right"style= "color:white" >{{ __('Telefono') }}</label>
                                  <div class="col-md-6">
                                      <input id="telefono" type="text" class="form-control " name="telefono" value="{{ old('telefono') }}" >
                                      @error('telefono')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                          </div>
                          <div class="form-group row"> <!-- pasword -->
                              <label for="password" class="col-md-4 col-form-label text-md-right"style= "color:white" >{{ __('contraseña') }}</label>
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control " name="password" >
                                  {{-- @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror --}}
                              </div>
                          </div>
                          <div class="form-group row"> <!-- rePassword -->
                              <label for="rePassword" class="col-md-4 col-form-label text-md-right"style= "color:white" >{{ __('confirmar contraseña') }}</label>
                              <div class="col-md-6">
                                  <input id="rePassword" type="password" class="form-control" name="password_confirmation" >
                              </div>
                          </div>
                          <div class="form-group row mb-0"> <!-- submit -->
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('validar') }}
                                  </button>
                              </div>
                          </div>
                        </div>
                      </form>
                      <div id="Exitoso">Registro Exitoso</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
  </body>