
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('title')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Veganbook</title>
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="css/jquery.bxslider.css">
    
    </head>
    @yield('header')
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
  <img src="imagenes/logo.png"  width="5px" alt="" >
</div>
</nav>
<div class="row">
    <div class="col-lg-8 col-md-8 col-xs-12">
      <h3>listado de Articulos<a href="articulo/create"><button class="btn btn-success">Nuevo</button></a></h3>
   @include('almacen.articulo.search')
    </div>
  </div>                  
              