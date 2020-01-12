<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Articulo;
use App\Categoria;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Auth::User();
      
        $articulos = Articulo::paginate(5);
        $categorias = Categoria::paginate(3);
        return view('home',[
          "users"=>$users ,'articulos'=> $articulos,'categorias'=>$categorias
        ]);
       
       
    }
}
