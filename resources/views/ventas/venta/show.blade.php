@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-12 col-sm-12 col-md-12 col-sx-12">
    <div class="form-group">
      <label for="CLiente">Cliente</label>
    <p>{{$ventas->nombre}}</p>
    </div>
  </div>

  <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
    <div class="form-group">
      <label for="tipo_comprante">Tipo de Comprobante</label>
    <p>{{$ventas->tipo_comprobante}}</p>
    </div>
  </div>

  <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
    <div class="form-group">
        <label for="serie_comprobante">Serie de Comprobante</label>
    <p>{{$ventas->serie_comprobante}}</p>

</div>
  </div>


  <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
  <div class="form-group">
    <label for="num_documento">Numero Comprobante</label>
  <p>{{$ventas->num_comprobante}}</p>
</div>
</div>
</div>

<div class="row">
    <div class="panel panel-primary">
        <div class="panel-body">

 <div class="col-lg-12 col-sm-12 col-md-12 col-sx-12">
 <table id="detalles" class="table table-strinped table-bordered table-condensed table-hover">
 <thead style="background-color:#A9D0F5">
   
   <th>ARTICULO</th>
   <th>CANTIDAD</th> 
   <th>PRECIO VENTA</th>          
   <th>DESCUENTO</th>
   <th>SUBTOTAL</th>
 </thead>
            <tfoot>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><h4 id="total">{{$ventas->total_venta}} </h4></th>
            </tfoot>
   <tbody>
       @foreach ($detalles as $detalle)
           <tr>
           <td>{{$detalle->articulo}}</td>
           <td>{{$detalle->cantidad}}</td>
           <td>{{$detalle->precio_venta}}</td>
           <td>{{$detalle->descuento}}</td>
           <td>{{$detalle->cantidad*$detalle->precio_venta-$detalle->descuento}}</td>


           </tr>
                      @endforeach

                 </tbody>
                    
                </table>
                 </div>
               
            </div>
         </div>
      </div>
  
   



@endsection
