@extends('layouts.header')
@section('title')
@section('header')


<div class="row">
  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
    <div class="table-resposive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Id</th>
          <th>Nombre</th>
          <th>Codigo</th>
          <th>Categoria</th>
          <th>Stock</th>
          <th>Imagen</th>
          <th>Opciones</th>

        </thead>
        @foreach ($articulos as $art)
          <tr>
          <td>{{$art->idarticulo}}</td>
          <td>{{$art->nombre}}</td>
          <td>{{$art->codigo}}</td>
          <td>{{$art->categoria}}</td>
          <td>{{$art->stock}}</td>

          <td>
              <img src="{{asset('/imagenes/articulos/'.$art->imagen)}}" alt="{{$art->nombre}}" height="100px" width="100px" class="img-thumbnail">
          </td>
            <td>{{$art->estado}}</td>
          <td>
          <a href="{{URL::action('ArticuloController@edit',$art->idarticulo)}}">  <button class="btn btn-info"> editar</button></a>
            <a href=""data-target="#modal-delete-{{$art->idarticulo}}" data-toggle="modal"><button class="btn btn-danger">eliminar categoria</button></a>
          </td>

          </tr>
          @include('almacen.articulo.modal')
        @endforeach
      </table>
      </div>
      {{$articulos->render()}}
    </div>
  </div>

</div> 
@endsection
