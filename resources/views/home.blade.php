


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Veganbook</title>
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/welcome.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
<header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="/imagenes/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="almacen/articulo">carga tus articulos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="almacen/categoria">cargar las categorias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/aboutUs">Acerca de Veganbook</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/faqs">FAQS</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
      <section id="banner">
        <div class="container">
       
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12  ">
              <div class="table-resposive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                <h3 style="color:brown">bienvinido {{$users->name}}</h3>
                  <p style="color:brown"> publica con nosotros!!</p>
                  <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Imagen</th>
                    <th>Opciones</th>
          
                  </thead>
                  @foreach ($articulos as $art)
                    <tr>
                    <td>{{$art->idarticulo}}</td>
                    <td>{{$art->nombre}}</td>
                    <td>{{$art->codigo}}</td>
                    <td>{{$art->categoria}}</td>
                    <td>{{$art->stock}}</td>
          
                    <td>
                        <img src="{{asset('/imagenes/articulos/'.$art->imagen)}}" alt="{{$art->nombre}}" height="40px" width="40px" class="img-thumbnail">
                    </td>
                      <td>{{$art->estado}}</td>
                    <td>
                   
                    </tr>
                    
                  @endforeach
                </table>
                </div>
                {{$articulos->links()}}
              </div>
            </div>
          
          </div>



        </div>
        <img src="/imagenes/curvas.png" class="bottom-img">
      </section>


      {{-- <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="table-resposive">
            <table class="table table-striped table-bordered table-condensed table-hover">
              <thead>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>opncion</th>
              </thead>
              @foreach ($categorias as $cat)
                <tr>
                <td>{{$cat->idcategoria}}</td>
                <td>{{$cat->nombre}}</td>
                <td>{{$cat->descripcion}}</td>
                <td>
             
      
                </tr>
              
              @endforeach
            </table>
            </div>
            {{$categorias->links()}}
          </div>
        </div>
      
      </div> 


 --}}









        <footer class="footer">
             
          <div>
            <p>Encuentranos en las redes</p>
            <a class="btn btn-outline-dark btn-social mx-1" href="#">
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
          </div>


        </footer>

        
        
    </body>
   
</html>


