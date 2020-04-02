@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-8 col-md-8 col-xs-12">
    <h3>listado de categorias<a href="categoria/create"><button class="btn btn-success">nuevo</button></a></h3>
 @include('almacen.categoria.search')
  </div>
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-resposive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>id</th>
          <th>nombre</th>
          <th>descripcion</th>
          <th>opncion</th>
        </thead>
        @foreach ($categorias as $cat)
          <tr>
          <td>{{$cat->idcategoria}}</td>
          <td>{{$cat->nombre}}</td>
          <td>{{$cat->descripcion}}</td>
          <td>
          <a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}">  <button class="btn btn-info"> editar</button></a>
            <a href=""data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal"><button class="btn btn-danger">eliminar categoria</button></a>
          </td>

          </tr>
          @include('almacen.categoria.modal')
        @endforeach
      </table>
      </div>
      {{$categorias->render()}}
    </div>
  </div>

</div>
@endsection
