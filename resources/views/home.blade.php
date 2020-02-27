
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Veganbook</title>
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       
        <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="css/jquery.bxslider.css">
    {{-- <script src="js/bienvenida.js" language="JavaScript" type="text/javascript">
  
     
    </script>     --}}
    
    </head>
    <body id="body" >
    
      <div id="contenedor">    
      <header  id="main-header">
        <div class="row">
          <div class="col-12"> 
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="/imagenes/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>


                      
                     


                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="almacen/articulo">Subir articulo</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="almacen/categoria">Subir categoria</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ventas/cliente">Nuestros clientes</a>
                    </li>
        
             
                
                  </ul>
                  <div class="collapse navbar-collapse" id="navbarNav">
       
                    <select class="nav-link" name="fondo" id="fondo" onchange="cambiarFondo(this)">
                      <option value="red"> Rojo</option>
                      <option value="blue">Azul</option>
                      <option value="green">Verde</option>
                      <option value="black">Negro</option>
          
                      </select>
          
                  </div>
              @endguest
          </ul>
      </div>
  </div>



      
      </nav>
      



    </div>
    </div>
    </header>
<nav class="menu">
<div class="row">
<div class="col-12">
<div class="logo ">
  <img src="imagenes/logo.png"  width="500px" alt="" >



</div>
</div>
</div>
</nav>
      
<section class="contenido">
  <article class="contenedor">        
    <div class="row">
      <div class="col-12">       
     
        @forelse ($posts as $post)
        {{$post->textarea}}
        @empty
        <p style="width:160%; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Actualmente no realizo ningun posteo.</p>
        @endforelse




    {{-- <div id ="carrusel" >
      <div> <img src="css/images/01.jpg"  alt=""></div>
      <div> <img src="css/images/10.jfif"  alt=""></div>
      <div> <img src="css/images/03.jpg"  alt=""></div>
      <div> <img src="css/images/09.jfif"  alt=""></div>
     <div> <img src="css/images/08.jfif"  alt=""></div>
     <div>  <img src="css/images/11.jfif"  alt=""></div> 

    </div>
     --}}


   


</article>


    <article class ="articulo">

      <div class="row">
        <div class="col-12">
          <div class="table-resposive">
            <table class="table table-striped table-bordered table-condensed table-hover">
              <thead>
               
                <th>Nombre</th>
              
                <th>Stock</th>
                <th>Imagen</th>
                <th>Opciones</th>
      
              </thead>
              @foreach ($articulos as $art)
                <tr>
                <td>{{$art->nombre}}</td>
           
                <td>{{$art->stock}}</td>
      
                <td>
                    <img src="{{asset('/imagenes/articulos/'.$art->imagen)}}" alt="{{$art->nombre}}" height="100px" width="100px" class="img-thumbnail">
                </td>
                  <td>{{$art->estado}}</td>
                <td>
           
                </tr>
              
              @endforeach
            </table>
            {{$articulos->links()}}
            </div>
          
          </div>
        </div>
      
    
      
      
  
      </article>
      </section>

      {{-- noticia y propagandas --}}
      <aside >
        <div class="propaganda">
          <div class="row">
            <div class="col-12">
          <h3>Veganbook</h3>
          <p>Es una pagina creada para lxs usuarios veganos 
          donde pueden publicar sus articulos.</p>
          <p>Interactuar con otro usuarios</p>
          <p>Intercambiar recetas veganas</p>
           -----------------------------------
           <h5>Articulos</h5>
           -----------------------------
           <p>
             <<----A tu izquierda podes ver los artiticulos activos</p>
           ---------------------------------
           <h5>Saludos</h5> 
           -------------------------------
           {{-- <p>Gracias y saludo
             a todos nuestros usuarios por postear 
             y publicar tus articulos
             gracias por confiar en nosotros 
             este equipo de programadores
             trabaja dia a dia para mojorar la 
             calidad de nuestra pagina haciendola 
             cada vez mas dinamica para la calidad 
             nuestro usuarios. gracias lo saluda
             VeganBook.... 
           </p> --}}



        </div>  

           
             
                
          
              


              </aside>
          
  

        <footer class="footer"> 
                   
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
        <script src="js/cambio.js"></script>     
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/body.js"></script>
        
             
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
                             
    </body>
   

</html>


