@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h3>Nuevas Venta</h3>
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
{!!Form::open(array('url'=> 'ventas/venta','method'=>'Post','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
  <div class="col-lg-12 col-sm-12 col-md-12 col-sx-12">
    <div class="form-group">
      <label for="cliente">Cliente</label>
      <select name="idcliente" id="idcliente" class="form-control selectpicker"  data-Live-search="true" >
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
                <option value="{{$articulo->idarticulo}}_{{$articulo->stock}}_{{$articulo->precio_promedio}}">{{$articulo->articulo}}</option> 
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
             <label for="Stock">Stock</label>
             <input  type="number"  disabled  name="pstock" id="pstock"  class="form-control"  value="{{old('pstock')}}" placeholder="stock">
         
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
                  <label for="pdescuento">descuento</label>
              <input  type="number" name="pdescuento" id="pdescuento" class="form-control"  value="{{old('pdescuento')}}" placeholder="descuento">
           
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
        <th>PRECIO VENTA</th>
        <th>DESCUENTO</th>
        <th>SUBTOTAL</th>
      </thead>
      <tfoot>
          
       <th>TOTAL</th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th><h4 id="total">S/. 0.00 </h4><input type="hidden" class="total_venta" id="total_venta"></th>
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
    $('#pidarticulo').change(mostrarValores);

    function mostrarValores()
    {
      datosArticulo=document.getElementById('pidarticulo').value.split('_');
      $('#pprecio_venta').val(datosArticulo[2]);
      $('#pstock').val(datosArticulo[1]);

    }

    function agregar(){
  datosArticulo=document.getElementById('pidarticulo').value.split('_');
  idarticulo=datosArticulo[0]
  articulo=$("#pidarticulo option:selected").text();//guardo el texto que se selecciona en la option que es lo q me interesa
  cantidad=$("#pcantidad").val();  
  descuento=$("#pdescuento").val(); 
  precio_venta=$("#pprecio_venta").val(); 
  stock=$("#pstock").val(); 
  if (idarticulo!="" && cantidad!="" && cantidad >0 && descuento!="" && precio_venta!="") 
  {  

  if(stock>=cantidad)

{

  subtotal[cont]=(cantidad*precio_venta-descuento);
   total = total+subtotal[cont];
   
   var fila ='<tr class="selected" id="fila'+cont+'"><td> <button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'"> '+articulo+'</td> <td><input type="number" name="cantidad[]" value="'+cantidad+'"> </td><td><input type="number" name="precio_venta[]" value="'+precio_venta+'"> </td> <td><input type="number" name="descuento[]" value="'+descuento+'"></td><td>'+subtotal[cont]+' </td> </tr>';
   cont++;
   limpiar();
   $("#total").html("S/. " + total);
   $("#total_venta").val(total);
   evaluar();
   $('#detalles').append(fila); 
} 
else{
  alert("la cantidad a vender supera el stock")
}
  
  } 
  else{

    alert("Error el detalle del Venta, reviso los datos del articulo")

  }
  
   }

     function limpiar(){
         $('#pcantidad').val("");
         $('#pdescuento').val("");
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
$("#total_venta").val(total);
$("#fila"+ index).remove();
evaluar();

}
console.log(total);


    </script>  
    @endpush
@endsection
