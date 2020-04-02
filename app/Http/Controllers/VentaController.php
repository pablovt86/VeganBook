<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\VentaFormRequest;
use App\Venta;
use App\Detalle_Venta;
use DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
class VentaController extends Controller
{
    

    public function __construct(){
        $this->middleware('auth');

    }
      public function index(Request $request){
        if($request)
        {
          //trim podemos eliminar espacios en blanco u otros caracteres al inicio y final de una cadena de texto
          $query=trim($request->get('searchText'));
          $ventas=DB::table('venta as v')
          ->join('persona as p' ,'v.idventa' ,'=', 'p.idpersona' )
          ->join('detalle_venta as dv' ,'v.idventa', '=' ,'dv.idventa')
          ->select('v.idventa','v.fecha_hora','p.nombre','v.tipo_comprobante', 'v.serie_comprobante','v.num_comprobante','v.impuesto','.estado','v.total_venta')
          ->where('v.num_comprobante','LIKE','%'.$query.'%')
          ->orderBy('v.idventa', 'desc')
          ->groupBy('v.idventa','v.fecha_hora','p.nombre','v.tipo_comprobante', 'v.serie_comprobante','v.num_comprobante','v.impuesto','v.estado')
          ->paginate(1);
          return view('ventas.venta.index',["ventas"=>$ventas,"searchText"=>$query]);
        }
      }
  
        public function create(Request $request){
  
       $personas = DB::table('persona')->where('tipo_persona', '=' ,'Cliente')->get();
       $articulos = DB::table('articulo as art')
       ->join('detalle_ingreso as di' ,'art.idarticulo', '=' ,'di.idarticulo')
       ->select(DB::raw('CONCAT(art.codigo," ",art.nombre) AS articulo'),'art.idarticulo','art.stock',DB::raw('avg(di.precio_venta) as precio_promedio'))
       ->where('art.estado', '=' ,'Activo')
       ->where('art.stock', '>' ,'0')
       ->groupBy('articulo','art.idarticulo','art.stock')
       ->get();
        
   
    return view('ventas.venta.create',["personas"=>$personas,"articulos"=>$articulos]);
        }
  
  
  public function store(VentaFormRequest $request){
  
  try {
    DB::beginTransaction();// con este methodo inicia transaciones
    $venta = new Venta;
    $venta->idcliente=$request->get('idventa');
    $venta->tipo_comprobante=$request->get('tipo_comprobante');
    $venta->serie_comprobante=$request->get('serie_comprobante');
    $venta->num_comprobante=$request->get('num_comprobante');
    $venta->total_venta=$request->get('total_venta');
    $mytime->CARBON::now('america/argentina');
    $venta->fecha_hora=$mytime->toDateTimeString();
    $venta->impuesto=18;
    $venta->estado='A';
    $venta->save();
  
    $idarticulo = $requets->get('idarticulo');
    $cantidad = $requets->get('catidad');
    $descuento = $requets->get('descuento');
    $precio_venta = $requets->get('precio_venta');
  
  
  
  $cont = 0;
  while ($cont <= $idarticulo) {
  
    $detalle = new DetalleVenta;
    $detalle->idventa=$venta->idventa;
    $detalle->idarticulo=$idarticulo[$count];
    $detalle->cantidad=$cantidad[$count];
    $detalle->descuento=$descuento[$count];
    $detalle->precio_venta=$precio_venta[$count];
    $detalle->save();
    $cont=$cont+1;
  }
  
  
    DB::commit();//y terminar transacciones
  
  } catch (\Exception $e) {
    
    DB::rollback();//anular la transaccion
  }
   return Redirect::to('ventas/venta');
  }
  
  public function show($id){
    $ventas=DB::table('venta as v')
     ->join('persona as p' ,'v.idcliente' ,'=', 'p.idpersona'  )
     ->join('detalle_venta as dv' ,'v.idventa', '=' ,'dv.idventa' )
     ->select('v.idventa','v.fecha_hora','p.nombre','v.tipo_comprobante', 'v.serie_comprobante','v.num_comprobante','v.impuesto','v.estado','v.total_venta')//DB::raw('sum(di.cantidad*precio_compra as total)'))aca utilizo raw y le digo que sume de la tabla ingreso detalle catidad*precio compra y lo guarde en el total}
     ->where('v.idventa','=',$id)
     ->first();
  
  $detalles=DB::table('detalle_venta as d')
  ->join('articulo as a' ,'d.idarticulo' ,'=', 'a.idarticulo')
  ->select('a.nombre as articulo' ,'d.cantidad', 'd.descuento' ,'d.precio_venta' )
  ->where('d.idventa' ,'=',$id)
  ->get();
  
  return view('ventas.venta.show',["ventas"=>$ventas,"detalles"=>$detalles]);
  
  
  
  }
  
  public function destroy($id){
  
    $venta=Venta::findOrFail($id);
    $venta->estado='C';
    $venta->update();
    return Redirect::to('venta.venta');
  
  }

}
