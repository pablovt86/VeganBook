<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\IngresoFormRequest;
use App\Ingreso;
use App\Detalle_ingreso;
use DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class IngresoController extends Controller
{

  public function __construct(){
    $this->middleware('auth');

}
    public function index(Request $request){
      if($request)
      {
        //trim podemos eliminar espacios en blanco u otros caracteres al inicio y final de una cadena de texto
        $query=trim($request->get('searchText'));
        $ingresos=DB::table('ingreso as i')
        ->join('persona as p' ,'i.idproveedor' ,'=', 'p.idpersona' )
        ->join('detalle_ingreso as di' ,'i.idingreso', '=' ,'di.idingreso')
        ->select('i.idingreso','i.fecha_hora','p.nombre','i.tipo_comprobante', 'i.serie_comprobante','i.num_comprobante','i.impuesto','i.estado',DB::raw('sum(di.cantidad*precio_compra) as total'))
        ->where('i.num_comprobante','LIKE','%'.$query.'%')
        ->orderBy('i.idingreso', 'desc')
        ->groupBy('i.idingreso','i.fecha_hora','p.nombre','i.tipo_comprobante', 'i.serie_comprobante','i.num_comprobante','i.impuesto','i.estado')
        ->paginate(1);
        return view('almacen.compras.ingreso.index',["ingresos"=>$ingresos,"searchText"=>$query]);
      }
    }

      public function create(Request $request){

     $personas = DB::table('persona')->where('tipo_persona', '=' ,'Proveedor')->get();
     $articulos = DB::table('articulo as art')
     ->select(DB::raw('CONCAT(art.codigo," ",art.nombre) AS articulo'),'art.idarticulo')
     ->where('art.estado', '=' ,'Activo')
     ->get();
      
 
  return view('almacen.compras.ingreso.create',["personas"=>$personas,"articulos"=>$articulos]);
      }


public function store(IngresoFormRequest $request){

try {
  DB::beginTransaction();// con este methodo inicia transaciones
  $ingreso = new Ingreso;
  $ingreso->idproveedor=$request->get('idproveedor');
  $ingreso->tipo_comprobante=$request->get('tipo_comprobante');
  $ingreso->serie_comprobante=$request->get('serie_comprobante');
  $ingreso->num_comprobante=$request->get('num_comprobante');
  $mytime->CARBON::now('america/argentina');
  $ingreso->fecha_hora=$mytime->toDateTimeString();
  $ingreso->impuesto=18;
  $ingreso->estado='A';
  $ingreso->save();

  $idarticulo = $requets->get('idarticulo');
  $cantidad = $requets->get('catidad');
  $precio_compra = $requets->get('precio_compra');
  $precio_venta = $requets->get('precio_venta');



$cont = 0;
while ($cont <= $idarticulo) {

  $detalle = new Detalle;
  $detalle->idingreso=$ingreso->idingreso;
  $detalle->idarticulo=$idarticulo[$count];
  $detalle->cantidad=$cantidad[$count];
  $detalle->precio_compra=$precio_compra[$count];
  $detalle->precio_venta=$precio_venta[$count];
  $detalle->save();
  $cont=$cont+1;
}


  DB::commit();//y terminar transacciones

} catch (\Exception $e) {
  
  DB::rollback();//anular la transaccion
}
 return Redirect::to('almacen/compras/ingreso');
}

public function show($id){
  $ingreso=DB::table('ingreso as i')
   ->join('persona as p' ,'i.idproveedor' ,'=', 'p.idpersona'  )
   ->join('detalle_ingreso as di' ,'i.idingreso', '=' ,'di.idingreso' )
   ->select('i.idingreso','i.fecha_hora','p.nombre','i.tipo_comprobante', 'i.serie_comprobante','i.num_comprobante','i.impuesto','i.estado',DB::raw('sum(di.cantidad*precio_compra) as total'))//DB::raw('sum(di.cantidad*precio_compra as total)'))aca utilizo raw y le digo que sume de la tabla ingreso detalle catidad*precio compra y lo guarde en el total}
   ->where('i.idingreso','=',$id)
   ->first();

$detalles=DB::table('detalle_ingreso as d')
->join('articulo as a' ,'d.idarticulo' ,'=', 'a.idarticulo')
->select('a.nombre as articulo' ,'d.cantidad', 'd.precio_compra' ,'d.precio_venta' )
->where('d.idingreso' ,'=',$id)
->get();

return view('almacen.compras.ingreso.show',["ingreso"=>$ingreso,"detalles"=>$detalles]);



}

public function destroy($id){

  $ingreso=Ingreso::findOrFail($id);
  $ingreso->estado='C';
  $ingreso->update();
  return Redirect::to('almacen/compras/ingreso');

}



}
