@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-8 col-md-8 col-xs-12">
    <h3>lista de ingreso<a href="/almacen/compras/ingreso/create"><button class="btn btn-success">nuevo</button></a></h3>
 @include('almacen.compras.ingreso.search')
  </div>
</div>
<div class="row">
  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
    <div class="table-resposive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
            <th>Id</th>
            <th>FECHA</th>
            <th>PROVEEDOR</th>
            <th>TIPO COMPROBANTE</th>           
            <th>IMPUESTO</th>
            <th>TOTAL</th>
            <th>ESTADO</th>
            <th>OPCIONES</th>
            {{-- {{dd($ingresos)}} --}}

        </thead>
        @foreach ($ingresos as $ing)
      
          <tr>
            <td>{{$ing->idingreso}}</td>
            <td>{{$ing->fecha_hora}}</td>
            <td>{{$ing->nombre}}</td>
            <td>{{$ing->tipo_comprobante. ': ' .$ing->serie_comprobante. '-' . $ing->num_comprobante}}</td>
            <td>{{$ing->impuesto}}</td>
            <td>{{$ing->total}}</td>
            <td>{{$ing->estado}}</td>
   
          
            <td>
              <a href="{{URL::action('IngresoController@show',$ing->idingreso)}}">  <button class="btn btn-info">Detalle</button></a>
                <a href=""data-target="#modal-delete-{{$ing->idingreso}}" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
              </td>

          </tr>
          @include('almacen.compras.Ingreso.modal')
        @endforeach
      </table>
      </div>
      {{$ingresos->links()}}
    </div>
  </div>

</div> 
@endsection