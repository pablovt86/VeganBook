@extends('layouts.pista')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" onsubmit= "return validacion();">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>


                            </div>
                        </div>

                       
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                              <input id="email" type="text" class="form-control " name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('direccion') }}</label>

                            <div class="col-md-6">
                              <input id="direccion" type="text" class="form-control " name="direccion" value="{{ old('direccion') }}"  autocomplete="direccion" autofocus>


                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">paises</label>
                            <div class="col-md-6">
                            <select id="Paises"  type="text" class="form-control "  name="paises" value="paises" autocomplete="paises" autofocus >
                            </select>

                            </div>
                        </div>









                        <div class="form-group row">
                            <label for="num_documento" class="col-md-4 col-form-label text-md-right">{{ __('num_documento') }}</label>

                            <div class="col-md-6">
                              <input id="num_documento" type="text" class="form-control " name="num_documento" value="{{ old('num_documento') }}"  autocomplete="" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('telefono') }}</label>

                            <div class="col-md-6">
                              <input id="telefono" type="text" class="form-control " name="telefono" value="{{ old('telefono') }}"  autocomplete="telefono" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                              <input id="name" type="text" class="form-control " name="name" value="{{ old('password') }}"  autocomplete="password" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>


@endsection
