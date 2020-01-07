<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticuloFormRequest;
use App\Articulo;
use DB;
class ArticuloController extends Controller
{

  public function __construct(){

  }
  public function index(Request $request){
    if($request)
    {
      $query=trim($request->get('searchText'));
      $articulos=DB::table('articulo as art')
       ->join('categoria as cat','art.idcategoria','=','cat.idcategoria')
       ->select('art.idarticulo','art.nombre','art.codigo','art.stock','cat.nombre as categoria','art.imagen','art.estado')
        //aca nuscamos por el nombre del articulo
      ->where('art.nombre','LIKE','%'.$query.'%')
      //aca buscamos con el numero de codigo
      ->orwhere('art.codigo','LIKE','%'.$query.'%')
      ->orderBy('art.idarticulo', 'desc')
      ->paginate(7);
      return view('almacen.articulo.index',["articulos"=>$articulos,"searchText"=>$query]);
    }
  }
  public function create(){
    $categorias=DB::table('categoria')->where('condicion','=','1')->get();
    return view('almacen.articulo.create',["categorias"=>$categorias]);
  }
  public function store(ArticuloFormRequest $request){
    $articulo=new Articulo;
    $articulo->idcategoria=$request->get('idcategoria');
    $articulo->codigo=$request->get('codigo');
    $articulo->nombre=$request->get('nombre');
    $articulo->stock=$request->get('stock');
    $articulo->descricion=$request->get('descricion');
    $articulo->estado='Activo';
    if ($request->hasFile('imagen')) {
      $file=$request->file('imagen');
      $file->move(public_path(). '/imagenes/articulos/' ,$file->getClientOriginalName());
      $articulo->imagen=$file->getClientOriginalName();
    }
    $articulo->save();
    return Redirect('almacen/articulo');

  }
  public function show($id){
    return view('almacen.articulo.show',["articulo"=>Articulo::findOrFail($id)]);
  }

  public function edit($id){
    $articulo=Articulo::findOrFail($id);
    $categorias=DB::table('categoria')->where('condicion', '=','1')->get();
      return view('almacen.articulo.edit',["articulo"=>$articulo,"categorias"=>$categorias]);
  }
  public function update(ArticuloFormRequest $request,$id){
  $articulo=Articulo::findOrFail($id);
  $articulo->idcategoria=$request->get('idcategoria');
  $articulo->codigo=$request->get('codigo');
  $articulo->nombre=$request->get('nombre');
  $articulo->stock=$request->get('stock');
  $articulo->descricion=$request->get('descricion');

  if ($request->hasFile('imagen')){
    $file=$request->file('imagen');
    $file->move(public_path(). '/imagenes/articulos/' ,$file->getClientOriginalName());
    $articulo->imagen=$file->getClientOriginalName();
  }
  $articulo->update();
   return Redirect('almacen/articulo');
  }
  public function destroy($id){
    $articulo=Articulo::findOrFail($id);
    $articulo->estado='inactivo';
    $articulo->update();
    return Redirect('almacen/articulo');
  }
  }
