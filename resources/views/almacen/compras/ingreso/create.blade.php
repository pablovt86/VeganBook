@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h3>Nuevas Ingresp</h3>
@if (count($errors)>0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach

  </ul>

</div>
@endif
</div>
</div>
{!!Form::open(array('url'=> '/almacen/compras/ingreso','method'=>'Post','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
  <div class="col-lg-12 col-sm-12 col-md-12 col-sx-12">
    <div class="form-group">
      <label for="nombre">Proveedor</label>
      <select name="idproveedor" id="idproveedor" class="form-control selectpicker"  data-Live-search="true" >
          @foreach ($personas as $persona)
      <option value="{{$persona->idpersona}}">{{$persona->nombre}}</option>
          @endforeach
      </select>
    </div>
  </div>
  
  <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
    <div class="form-group">
      <label for="nombre">Tipo Comprobante</label>
<select class="form-control" name="tipo_comprobante">
  <option value="boleta">BOLETA</option>
  <option value="factura">FACTURA</option>
  <option value="ticket">TICKET</option>
</select>
</div>
  </div>

  <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
  <div class="form-group">
    <label for="serie_comprobante">Serie comprobante</label>
    <input  type="text" name="serie_comprobante"  class="form-control"   value="{{old('serie_comprobante')}}" placeholder="serie comprobante">
  </div>
</div>

<div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
    <div class="form-group">
      <label for="num_comprobante">Numero comprobante</label>
      <input type="text" name="num_comprobante" required   class="form-control"   value="{{old('num_comprobante')}}" placeholder="numero comprobante">
    </div>
  </div>
  
</div>



<div class="row">
    <div class="panel panel-primary">
      <div class="panel-body">
        <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
         <div class="form-group">

       <label for="">Articulo</label>
          <select name="pidarticulo" class="form-control selectpicker"  id="pidarticulo" data-Live-search="true">
              @foreach ($articulos as $articulo)
                <option value="{{$articulo->idarticulo}}">{{$articulo->articulo}}</option> 
                   @endforeach


                 </select>
              </div>
         </div>

         <div class="col-lg-2 col-sm-2 col-md-2 col-sx-12">
            <div class="form-group">
             <label for="Cantidad">Cantidad</label>
             <input  type="number" name="pcantidad" id="pcantidad" class="form-control"  value="{{old('cantidad')}}" placeholder="cantidad">
         
         </div>
           </div>
           
  <div class="col-lg-2 col-sm-2 col-md-2 col-sx-12">
    <div class="form-group">
        <label for="precio_compra">P.Compra</label>
    <input  type="number" name="pprecio_compra" id="pprecio_compra" class="form-control"  value="{{old('pprecio_compra')}}" placeholder="p.compra">
 
 </div>
   </div>

   <div class="col-lg-2 col-sm-2 col-md-2 col-sx-12">
    <div class="form-group">
 
         <label for="precio_venta">P.Venta</label>
            <input  type="number" name="pprecio_venta" id="pprecio_venta" class="form-control" value="{{old('pprecio_venta')}}" placeholder="p.venta">
     
               </div>
            </div>
    

      <div class="col-lg-2 col-sm-2 col-md-2 col-sx-12">
         <div class="form-group">
             <button type="button" class="btn btn-primary" id="bt_add" >Agregar</button>
          </div>
      </div>
      <div class="col-lg-12 col-sm-12 col-md-12 col-sx-12">
      <table id="detalles" class="table table-strinped table-bordered table-condensed table-hover">
      <thead style="background-color:#A9D0F5">
        <th>OPCIONES</th>
        <th>ARTICULO</th>
        <th>CANTIDAD</th>           
        <th>PRECIO COMPRA</th>
        <th>PRECIO VENTA</th>
        <th>SUBTOTAL</th>
      </thead>
      <tfoot>
          
       <th>TOTAL</th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th><h4 id="total">S/. 0.00 </h4></th>
        <tbody>

          </tbody>
      </tfoot>
      </table>
    </div>

   </div>
 </div>
    
 <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12" id="guardar">
    <div class="form-group">
        <input name="_token" value="{{ csrf_token() }}"type="hidden">
      <button class="btn btn-primary" type="submit">Guardar</button>
      <button class="btn btn-danger" type="reset">Cancelar</button>
    
    </div>
    </div>

    {!!Form::close()!!}

    @push('scripts')
      <script>
       $(document).ready(function(){
        $('#bt_add').click(function(){
            agregar();
        });
    });
    var cont=0;
    total=0;
    subtotal=[];
    $("#guardar").hide();

    function agregar(){

  idarticulo=$("#pidarticulo").val();
  articulo=$("#pidarticulo option:selected").text();//guardo el texto que se selecciona en la option que es lo q me interesa
  cantidad=$("#pcantidad").val();  
  precio_compra=$("#pprecio_compra").val(); 
  precio_venta=$("#pprecio_venta").val(); 
  if (idarticulo!="" && cantidad!="" && cantidad >0 && precio_compra!="" && precio_venta!="") 
      
  {
   subtotal[cont]=(cantidad*precio_compra);
   total = total+subtotal[cont];
   
   var fila ='<tr class="selected" id="fila'+cont+'"><td> <button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'"> '+articulo+'</td> <td><input type="number" name="cantidad[]" value="'+cantidad+'"> </td><td><input type="number" name="precio_compra[]" value="'+precio_compra+'"> </td> <td><input type="number" name="precio_venta[]" value="'+precio_venta+'"></td><td>'+subtotal[cont]+' </td> </tr>';
   cont++;
   limpiar();
   $("#total").html("S/. " + total);
   evaluar();
   $('#detalles').append(fila);
  }else{

    alert("Error el detalle del ingreso, reviso los datos del articulo")

  }
  
   }

     function limpiar(){
         $('#pcantidad').val("");
         $('#pprecio_compra').val("");
         $('#pprecio_venta').val("");
     }


function evaluar(){
    if (total>0) {
        $("#guardar").show();  
    }else{

      $("#guardar").hide();

    }

}
function eliminar(index){
total=total-subtotal[index];
$("#total").html("S/. " + total);
$("#fila"+ index).remove();
evaluar();

}
console.log(total);


    </script>  
    @endpush
@endsection
