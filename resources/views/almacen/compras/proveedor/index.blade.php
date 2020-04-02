@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-8 col-md-8 col-xs-12">
    <h3>listado de proveedor<a href="/almacen/compras/proveedor/create"><button class="btn btn-success">nuevo</button></a></h3>
 @include('almacen.compras.proveedor.search')
  </div>
</div>
<div class="row">
  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
    <div class="table-resposive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        {{-- {{var_dump($persona)}} --}}
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Tipo Doc.</th>
            <th>Num Doc</th>
            <th>Telefono</th>
            <th>Email</th>
        </thead>
        @foreach ($persona as $ing)
       
          <tr>
            <td>{{$ing->idpersona}}</td>
            <td>{{$ing->nombre}}</td>
            <td>{{$ing->tipo_documento}}</td>
            <td>{{$ing->num_documento}}</td>
            <td>{{$ing->telefono}}</td>
            <td>{{$ing->email}}</td>
  
  
          
          <td>
          <a href="{{URL::action('ProveedoresController@edit',$ing->idpersona)}}">  <button class="btn btn-info"> editar</button></a>
            <a href=""data-target="#modal-delete-{{$ing->idpersona}}" data-toggle="modal"><button class="btn btn-danger">eliminar categoria</button></a>
          </td>

          </tr>
          @include('almacen.compras.proveedor.modal')
        @endforeach
      </table>
      </div>
      {{$persona->render()}}
    </div>
  </div>

</div> 
@endsection
