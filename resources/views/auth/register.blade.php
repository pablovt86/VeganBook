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
              <div class="card">
                  <div class="titulos card-header" style="background-color:#000000">Registrate en en Veganbook!</div>
                  <div class="card-body" style="background-color:#141414">
                      <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="formulario" onsubmit="return validar();">
                          @csrf
                        <div  id="primeraParte"> <!-- pais   este dato no se guardara-->
                            <label class="titulos"for="s-selectPaises">Paises*</label>
                            <select>
                             Argentina
                            </select><br>
                            <p class="titulos" style="font-size:10px">*por el momento solo disponible en argentina</p>
                            <br>
                            <button class="btn btn-primary" type="button" id="btn-siguienteSeccion">Siguiente</button>
                        </div>
                        <div id="segundaParte">  <!-- formulario standar -->
                          <div class="form-group row"> <!-- name -->
                              <label for="name" class="titulos col-md-4 col-form-label text-md-right">Nombre y apellido</label>
                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row"> <!-- dirreccion  -->
                            <label for="direccion" class="titulos col-md-4 col-form-label text-md-right">Dirección</label>
                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="dirreccion" autofocus>
                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!-- num_documento -->
                            <label for="num_documento" class="titulos col-md-4 col-form-label text-md-right">DNI</label>
                            <div class="col-md-6">
                                <input id="num_documento" type="text" class="form-control @error('num_documento') is-invalid @enderror" name="num_documento" value="{{ old('num_documento') }}" required autocomplete="num_documento" autofocus>
                                @error('num_documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"> <!--avatar -->
                            <label for="avatar" class="titulos col-md-4 col-form-label text-md-right">Foto de perfil</label>
                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avataro') }}" required autocomplete="avatar" autofocus>
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          <div class="form-group row"> <!-- email -->
                              <label for="email" class="titulos col-md-4 col-form-label text-md-right">Correo Electrónico</label>
                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row"> <!-- provincia  este no se guardara-->
                                  <label for="s-provincia" class="titulos col-md-4 col-form-label text-md-right">Provincia</label>
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
                                  <label for="s-provincia" class="titulos col-md-4 col-form-label text-md-right">Localidad</label>
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
                                  <label for="telefono" class="titulos col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                                  <div class="col-md-6">
                                      <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
                                      @error('telefono')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                          </div>
                          <div class="form-group row"> <!-- pasword -->
                              <label for="password" class="titulos col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
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
                              <label for="rePassword" class="titulos col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>
                              <div class="col-md-6">
                                  <input id="rePassword" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                          </div>
                          <div class="form-group row mb-0"> <!-- submit -->
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Registrarme') }}
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