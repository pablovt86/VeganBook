@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-12 col-sm-12 col-md-12 col-sx-12">
    <div class="form-group">
      <label for="proveedor">Proveedor</label>
    <p>{{$ingreso->nombre}}</p>
    </div>
  </div>

  <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
    <div class="form-group">
      <label for="tipo_comprante">Tipo de Comprobante</label>
    <p>{{$ingreso->tipo_comprobante}}</p>
    </div>
  </div>

  <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
    <div class="form-group">
        <label for="serie_comprobante">Serie de Comprobante</label>
    <p>{{$ingreso->serie_comprobante}}</p>

</div>
  </div>


  <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
  <div class="form-group">
    <label for="num_documento">Numero Comprobante</label>
  <p>{{$ingreso->num_comprobante}}</p>
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
   <th>PRECIO COMPRA</th>
   <th>PRECIO VENTA</th>
   <th>SUBTOTAL</th>
 </thead>
            <tfoot>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><h4 id="total">{{$ingreso->total}} </h4></th>
            </tfoot>
   <tbody>
       @foreach ($detalles as $detalle)
           <tr>
           <td>{{$detalle->articulo}}</td>
           <td>{{$detalle->cantidad}}</td>
           <td>{{$detalle->precio_compra}}</td>
           <td>{{$detalle->precio_compra}}</td>
           <td>{{$detalle->cantidad*$detalle->precio_compra}}</td>


           </tr>
                      @endforeach

                 </tbody>
                    
                </table>
                 </div>
               
            </div>
         </div>
      </div>
  
   



@endsection
