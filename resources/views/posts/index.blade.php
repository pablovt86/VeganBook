
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
    <script>
   
      function loadLog() {
var post= document.getElementById('textarea').value;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (xhttp.readyState == 4 && xhttp.status == 200) {
document.getElementById("posteo").innerHTML = xhttp.responseText;
}
};
xhttp.open("POST", "index.blade.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("textarea="+post);
}
    
    </script>
    </head>
    <body id="body">
      <div id="contenedor">    
      <header  id="main-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="/imagenes/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        
        <select name="fondo" id="fondo" onchange="cambiarFondo(this)">
          <option value="red">rojo</option>
          <option value="blue">azul</option>
          <option value="green">green</option>
          </select>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            
            </li>
            <li class="nav-item">
           
            </li>
            <li class="nav-item">
             
            </li>

            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          nuestro product
        </a>
        <div class="dropdown-menu">
          <a class="nav-link" href="almacen/articulo"><p style="color:black"> sube tu articulo </p></a>
          <a class="nav-link" href="almacen/categoria"><p style="color:black" >sube la categoria </p></a>
          <a class="nav-link" href="ventas/cliente"><p style="color:black" > nuestro clientes </p></a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </li>
        
          </ul>
          <div class="flex-center position-ref height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"><h5>Home</h5></a>
                    @else
                        <a href="{{ route('login') }}"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"></a>
                        @endif
                    @endauth
                </div>
            @endif 
        </div>
        </div>
      </nav>
    </header>
<nav class="menu">
<div class="logo ">
  <img src="imagenes/logo.png"  width="500px" alt="" >
</div>
</nav>
                      
                            
                            <section id="contenido">

                                <article id="posteo" class ="posteo">
                                  <div class="row">
                                
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <form  method="POST" action="" >
                                        @csrf  
                                     <h1 style="color:deepskyblue"> {{$users->name}}</h1>                                     
                                    <img src="{{ $users->url_path}}" width="70px" alt="70px">
                                    <textarea id="textarea" name="textarea"  rows="10" cols="60" placeholder="Cuentanos como es tu dia hoy!!"></textarea>
                                    
                                    <button type="submit" onclick="loadlog()">enviar</button>
                                    
                                  </form>
                                  
                                  
                                  </div>
                                
                                  </div>
                               
                                  </article>
                                 
                               <article class ="re-posteos">
                                <div class="row">   
                                  <div class="col-12">
                                        
                                    @foreach ($posts as $post)
                                  
                                <div class="textarea">
                                
                                  <p> {{$post->textarea}}</p>
                                
                                  </div>
                                @endforeach
                                  </div>
                                  </div>
                              
                              </article>                                                                              
                   
                 </section>        
        <aside >         
        <div class ="noticias">                        
            <div id ="carrusel" >
              <div> <img src="css/images/pannacotta.jfif"  alt=""></div>
              <div> <img src="css/images/light.jfif"  alt=""></div>
              <div> <img src="css/images/matambre-seitan.jpg"  alt=""></div>
              <div> <img src="css/images/bife-de-seitan.jpg"  alt=""></div>
             <div> <img src="css/images/carrot-cake.jpg"  alt=""></div>
             <div>  <img src="css/images/hamb-lent.jpg"  alt=""></div> 

            </div>
      
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
            
  
            <span id="postea"> <p>2020 © VeganBook.com Todos los derechos reservados </p></span>
           
          
        
      
          </footer>
          <script src="js/cambio.js"></script>
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
  
  
      








                            
                            
                            
                  
                        
                            
          
