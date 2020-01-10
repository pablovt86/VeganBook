@extends('layouts.app')

@section('content')
<head>

    <script src="js/validar.js"></script>
    <script src="js/errores.js"></script>
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
                <div class="card-header">{{ __('registro') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" onsubmit="validacion();"   id="formulario">
                        @csrf
                      <div  id="primeraParte"> <!-- pais  este dato no se guardara-->
                          <label for="s-selectPaises">Pais</label>
                          <select id="s-selectPaises">
                          </select>
                          <span>solo disponible en argentina</span>
                          <br>
                          <button type="button" id="btn-siguienteSeccion">Siguiente</button>
                      </div>
                      <div id="segundaParte">  <!-- formulario standar -->
                        <div class="form-group row"> <!-- name -->
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                               
                            </div>
                        </div>
                        <div class="form-group row"> <!-- email -->
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}"  autocomplete="email">
                               
                            </div>
                        </div>
                        <div class="form-group row"> <!-- email -->
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('direccion') }}</label>
                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control " name="direccion" value="{{ old('direccion') }}" autocomplete="direccion">
                                
                            </div>
                        </div>


                        <div class="form-group row"> <!-- email -->
                            <label for="num_documento" class="col-md-4 col-form-label text-md-right">{{ __('num_documento') }}</label>
                            <div class="col-md-6">
                                <input id="num_documento" type="text" class="form-control" name="num_documento" value="{{ old('num_documento') }}" autocomplete="num_documento">
                      
                            </div>
                        </div>






                        <div class="form-group row"> <!-- Pais -->
                                <label for="s-provincia" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>
                                <div class="col-md-6">
                                  <!-- <select name="cod_pais" id="s-provincia">
                              		</select> -->
                                    <select name="cod_pais" id="cod_pais">
                                        
                                    </select>
                                    <span>solo diponible en argentina</span>
                                   
                                </div>
                        </div>
                        <div class="form-group row"> <!-- provincia  este no se guardara-->
                                <label for="s-provincia" class="col-md-4 col-form-label text-md-right">{{ __('provincia') }}</label>
                                <div class="col-md-6">
                                  <select name="cod_pais" id="s-provincia">
                              		</select>
                                    <!-- <select name="cod_pais" id="cod_pais">
                                     
                                    </select> -->
                                  
                                </div>
                        </div>




                        
                        <div class="form-group row"> <!-- Telefono -->
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                                <div class="col-md-6">
                                    <input id="telefono" type="text" class="form-control " name="telefono" value="{{ old('telefono') }}" autocomplete="telefono" autofocus>
                                
                                </div>
                        </div>
                        <div class="form-group row"> <!-- pasword -->
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password"  autocomplete="new-password">
                               
                            </div>
                        </div>
                        <div class="form-group row"> <!-- rePassword -->
                            <label for="rePassword" class="col-md-4 col-form-label text-md-right">{{ __('confirmar contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="rePassword" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
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