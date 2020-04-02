<?php

namespace App\Http\Controllers;
 use App\Http\Requests\PostRequest;
 use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostController extends Controller
{
    public function index()
    {
        $users = Auth::User();
        $posts = $users->posts()->get();
        
        return view('posts/index',['posts'=>$posts ,'users'=>$users]);
    }

    public function store(Request $request){

        $reglas=[
            'textarea' =>"min:3|max:512",
            //   'title'=>"min:3|max:256",
        ];


        $mensaje =[
            'string' => "el campo:attribute debe ser texto",
             'min'   => " el campo:attribute   tiene un  :min",
             'max'   => "el campo:attribute  tiene  un  :max",
             'date'  => "el campo:attribute  debe tener una fecha",
             'numeric'=> "el campo:attribute  debe tener numero",
             'integer'=> "el campo:attribute  debe tener numero entero",
             'unique'  => "el campo:attribute  se encuentra repetido"
        ];


        $this->validate($request,$reglas,$mensaje);
           $post=new Post;
           $post->textarea=$request->get('textarea');
            $post->user_id = Auth::user()->id;
           $post->save();
         return redirect('posts');    

 }
  
 public function show($id){
    return view('posts.show',["posts"=>Post::findOrFail($id)]);
  }


  
  public function edit($id){
    return view('posts.edit',["posts"=>Post::findOrFail($id)]);
  }



  public function update(PostRequest $request,$id){
    $posts=Post::findOrFail($id);
    $posts->textarea=$request->get('textarea');
    // $post->user_id=$request->get('user_id');
    $posts->update();
    return Redirect("posts");
  }


  public function destroy(Request $request,$id){
    $posts=Post::findOrFail($id);
    $posts->textarea=$request->get('textarea');
    $posts->delete();
     return Redirect("posts");
   
  }



}