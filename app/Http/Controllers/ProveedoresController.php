<?php

namespace App\Http\Controllers;
use App\Persona;
use Illuminate\Http\Request;
use App\Http\Requests\PersonaFormRequest;
use DB;
use Proveedor;
class ProveedoresController extends Controller
{
  public function __construct(){
    $this->middleware('auth');

}

    public function index(Request $request){
     
        if($request){
            $query=trim($request->get('searchText'));
            $persona=DB::table('persona')
            ->where('nombre','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')
            ->orwhere('num_documento','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','idproveedor')
            ->orderBy('idpersona', 'desc')
            ->paginate(5);
            return view('almacen.compras.proveedor.index',["persona"=>$persona,"searchText"=>$query]);
          }
    }
public function create(){
    return view('almacen.compras.proveedor.create');



}

    public function show($id){
        return view('compras.proveedor.show',["persona"=>Persona::findOrFail($id)]);
      }
      public function store(PersonaFormRequest $request){
        $persona=new Persona;
        $persona->tipo_persona='Proveedor';
        $persona->nombre=$request->get('nombre');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->dirreccion=$request->get('dirreccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
    
        $persona->save();
        return Redirect('almacen/compras/proveedor');
    
      }

      public function edit($id){
        return view('almacen.compras.proveedor.edit',["persona"=>Persona::findOrFail($id)]);
    }

    public function update(PersonaFormRequest $request,$id){
      $persona=Persona::findOrFail($id);
      $persona->tipo_persona='Proveedor';
      $persona->nombre=$request->get('nombre');
      $persona->tipo_documento=$request->get('tipo_documento');
      $persona->num_documento=$request->get('num_documento');
      $persona->dirreccion=$request->get('dirreccion');
      $persona->telefono=$request->get('telefono');
      $persona->email=$request->get('email');
  
      $persona->update();
      return Redirect('almacen/compras/proveedor');
  
    }
    public function destroy($id){
      $persona=Persona::findOrFail($id);
      $persona->tipo_persona='inactivo';
      
     
      $persona->delete();

      return Redirect('almacen/compras/proveedor');
  }

}
