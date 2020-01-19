
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Veganbook</title>
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/post.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="css/jquery.bxslider.css">
   
    
    </head>
    <body id="body">
      <div id="contenedor">    
      <header  id="main-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="/imagenes/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="almacen/articulo">sube tu articulo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="almacen/categoria">sube la categoria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ventas/cliente">nuestro clientes</a>
            </li>

            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          nuestro product
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </li>
        
          </ul>
          <select name="fondo" id="fondo" onchange="cambiarFondo(this)">
            <option value="red">rojo</option>
            <option value="blue">azul</option>
            <option value="green">green</option>
            </select>

        </div>
      </nav>
      





    </header>
<nav class="menu">

<div class="logo ">
  <img src="imagenes/logo.png"  width="500px" alt="" >



</div>

</nav>
                        {{-- <article class ="posteo">
                           
                            <div class="row">
                           
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                
                            <form  method="POST" action="" >
                                @csrf
                              
                               
                            <h1>{{$users->name}}</h1>
                                <input type="text" name="title">title de tu post
                              <textarea class="textarea" name="textarea" value="textarea" rows="10" cols="60" placeholder="Cuentanos como es tu dia hoy!!"></textarea>
                             
                              <button  type="submit" value="submit">enviar</button>
                              <button type="reset" value="reset">borrar</button>
                            </form>
                       
                            </div>
                             --}}
                            
                            <section id="contenido">

                                <article class ="posteo">
                                  <div class="row">
                                
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <form  method="POST" action="" >
                                        @csrf  

                                     <h1 name ="title" value="post"  style="color:deepskyblue"> {{$users->name}}</h1>
                                    <img src="{{ $users->url_path}}" width="100px" alt="100px">
                                    <textarea class="textarea" name="textarea" value="" rows="10" cols="60" placeholder="Cuentanos como es tu dia hoy!!"></textarea>
                                    

                                    <button type="submit">enviar</button>
                                    <button type="reset">borrar</button>
                                  </form>
                                  
                                  
                                  </div>
                                
                                  </div>
                               
                                  </article>
                                 
                               <article class ="re-posteos">
                                <div class="row">   
                                  <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                        
                                    @foreach ($posts as $post)
                                    {{$post->textarea}}
                                    {{$post->title}}
                                @endforeach
      
                                  </div>
                                  </div>
                              
                              </article>
                                



                            </article>

   
   





                   <article>
          
              
                    <div id ="carrusel" >
                      <div> <img src="css/images/01.jpg"  alt=""></div>
                      <div> <img src="css/images/10.jfif"  alt=""></div>
                      <div> <img src="css/images/03.jpg"  alt=""></div>
                      <div> <img src="css/images/09.jfif"  alt=""></div>
                     <div> <img src="css/images/08.jfif"  alt=""></div>
                     <div>  <img src="css/images/11.jfif"  alt=""></div> 
     
                    </div>
                    
    
              
                   
               
             
          </article>
        


        </section>
        <aside >
          <div class="propaganda">
  
  
  
  
            
          </div>
        <div class ="noticias">
       <br>
       
        </div>
  
    
  
        </aside>
     
    
  
          <footer class="footer"> 
            <div>
             
              </div>
              
              <p>Encuentranos en las redes</p>
              <a class="btn btn-outline-dark btn-social mx-1" href="https://www.facebook.com/delfina.book.1">
                <i class="fa fa-facebook"></i>
              </a>
              <a class="btn btn-outline-dark btn-social mx-1" href="#">
                <i class="fa fa-twitter"></i>
              </a>
              <a class="btn btn-outline-dark btn-social mx-1" href="#">
                <i class="fa fa-linkedin"></i>
              </a>
              <a class="btn btn-outline-dark btn-social mx-1" href="#">
                <i class="fa fa-instagram"></i>
              </a>
            
  
              <p>2020 © VeganBook.com Todos los derechos reservados </p>
           
          
        
      
          </footer>
          <script src="js/jquery-3.4.1.min.js"></script>
          <script src="js/jquery.bxslider.min.js"></script>
          <script src="js/body.js"></script>
          <script>
            $(document).ready(function(){
              $('#carrusel').bxSlider({
               auto:true,
               pause:1750,
              });
            });
           
  
  
     // busca algo cuando el usuario le de click a eso ejecuta la funcion
       $('.muestra').on('click',function(){
                console.log("ok");
           });
  
  
          </script>
          
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </body>
     
  
  </html>
  
  
      








                            
                            
                            
                  
                        
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
