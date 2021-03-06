<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Acerca de nosotros</title>
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/welcome.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
            <div class="content">
              <section id="nav-bar">

                <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="/imagenes/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
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

              </section>

              <section id="banner">
                <div class="container">
                  <div class="row">

                    <div class="col-md-12">
                         <span>Somos un grupo de personas que defiende una actitud global de verdadero respeto hacia los animales. Esta actitud es el veganismo, que además de la dieta vegana (libre de todo producto animal) trae de la mano el rechazo a toda forma de explotación de los animales. 
Nuestro proposito es acercarte productos sanos para ayudarte a mejorar tu nivel de vida y vivir en armonía con nuestro planeta.</span>
                    </div>
                  </div>
                </div>
                <img src="/imagenes/curvas.png" class="bottom-img">
              </section>

            </div>
        </div>
        <footer class="footer">

          <div>
            <div class="encuentra">
            Encuentranos en las redes
            </div>
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
            <div class="piepagina">
            <p>2020 © VeganBook.com Todos los derechos reservados </p>
            </div>
          </div>


        </footer>


    </body>
</html>
