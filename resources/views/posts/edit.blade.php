@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
 
                    <div class="card-body">


                        <article id="posteo" class ="posteo">
                            <div class="row">
                          
                              
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                {{Form::model($posts, ['route' => ['posts.update', $posts->id],'method'=>'patch'])}}
                                  @csrf  
                                 {{$posts->textarea}}
                              <textarea id="textarea" name="textarea"  rows="10" cols="60" placeholder="Cuentanos como es tu dia hoy!!"></textarea>
                              
                              <button type="submit" onclick="loadlog()">enviar</button>
                              
                              {{ Form::close() }}                            
                            
                            </div>
                          
                            </div>
                         
                            </article>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection