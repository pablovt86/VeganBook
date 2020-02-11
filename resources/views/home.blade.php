
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
            <option value="black">negro</option>

            </select>

        </div>
      </nav>
      





    </header>
<nav class="menu">

<div class="logo ">
  <img src="imagenes/logo.png"  width="500px" alt="" >



</div>

</nav>
      
<section id="contenido">
  <article class="contenedor">        
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">       
     
        @forelse ($posts as $post)
        {{$post->textarea}}
        @empty
        no se encuentra tu posteo
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

          <h3>Veganbook</h3>
          <p>es una pagina creada para los usuarios veganos</p> 
          donde pueden publicar sus articulos 
          <p>interactuar con otro usuarios </p>
          <p>intercambiar recetas veganas</p>
          <p>hacer medicamentos caseros con hierbas medicinales</p>
           ---------------------------
           <h5>Articulos</h5>
           -----------------------------
           <p>
             <<----a tu izquierda mira los artiticulos activos</p>
           -----------------------------
           <h5>Redes</h5>
           ------------------------------
             <p>  a tu derecha RedesSociales--></p>
           ----------------------------
           <h5>Saludos</h5> 
           ------------------------------  
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

           
              <div class ="noticias">
                <a id=""href="posts" class="btn btn-dark btn-lg " role="button" aria-disabled="true"><span id="postea">Oprime y Postea</span></a>

            {{-- <a href="posts"><h5>pincha y postea con nosotros</h5></a>  --}}
            <img src="css/images/postea.png" alt="">

              </div>
            
            <div class ="noticias2">
          
          <img src="css/images/siguenos-1.jfif" alt="">
          <div class="texto-encima"></div>
          <div class="centrado"><h3 style="color:white">VeganBook</h3></div>
          <p style="color:white">en Veganbook somos una comunidad abierta a la sociedad
          que estamos para brindarte nuestras herramientas gratuitamente sin costo alguno</p>
            </div>
            <div class ="noticias-2">
              <img src="css/images/veganos.jfif" alt="">
          
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
        <script>
          $(document).ready(function(){
            $('#carrusel').bxSlider({
             auto:true,
             pause:1750,
            });
          });       
   // busca algo cuando el usuario le de click a eso ejecuta la funcion
     $('.footer').on('click',function(){
              console.log();
         });
        </script>
             
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
                             
    </body>
   

</html>


