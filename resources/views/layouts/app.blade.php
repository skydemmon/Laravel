<!DOCTYPE html>
<html lang="fr">
<head>
  <title>F Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('/css/lightcase.css') }}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class = "container">
        <div  class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> <nav class="navbar navbar-expand-md bg-dark navbar-dark justify-content-center">
  <!-- Brand -->
  <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
   <img class="logo"
        src="img/logoF.png">
</a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">

  <!-- Links -->
  <ul class="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home"> Acueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="portfolio" >Portofolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="magasin.php">Magasin</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Assistance
      </a>
      <div class="dropdown-menu bg-dark">
        <a class="dropdown-item" href="askforhelp.php">Assistance</a>
        <a class="dropdown-item" href="portofolio-video.php">Tutorial Video</a>
      </div>
    </li>

    <li class="nav-item dropdown navbar-light">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Contact
      </a>
      <div class="dropdown-menu bg-dark">
        <a class="dropdown-item" href="map.php">Contact</a>
        <a class="dropdown-item" href="contact">Envoyer un email</a>
      </div>
    </li>

    <li class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Login
      </a>
      <div class="dropdown-menu bg-dark">
        <a class="dropdown-item" href="login">Log in</a>
        <a class="dropdown-item" href="inscription">Sign In</a>
      </div>
    </li>

  </ul>
</nav>

</div> 
    @yield('content')
</div>

<footer>
<h6>&copy; Copyright 2021 F Designs All Rights Reserved</h6>
<ul>
  <li><a href="https://www.instagram.com/chip_kidd/" target="_blank"><img src="img/instagram.png">Instagram</a></li>
  <li><a href="https://www.facebook.com/chip.kidd.18" target="_blank"><img src="img/facebook.png">Facebook</a></li>
  <li><a href="https://twitter.com/chipkidd?lang=fr" target="_blank"><img src="img/twitter.png">Twitter</a></li>
</ul>
</footer>

        </div>



        <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script> 
      <script>$(document).ready(function(){ $('body').find('img[alt$="www.000webhost.com"]').remove(); });</script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>     <script type="text/javascript" src="js/lightcase.js">      </script>     <script type="text/javascript">   jQuery(document).ready(function($) {     $('a[data-rel^=lightcase]').lightcase();   }); </script>
</body>
    </body>

    </html>