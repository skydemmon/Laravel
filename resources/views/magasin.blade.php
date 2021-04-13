@extends ('layouts.app')
@section('content')

<?php

function toSell(){
    $rep='../';
    $scan_rep=array_diff(scandir($rep), array('..', '.'));
    foreach($scan_rep as $site){  if($site=="Product1.php" || $site=="Product2.php" || $site=="Product3.php"){   return $site;}}
    $directory = 'img/to-sell';
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
  
  
  foreach($scanned_directory as $fichier_image){
  
     if($fichier_image!="hopper-portrait.jpg"&& $fichier_image!="." && $fichier_image!=".." &&$fichier_image!=".DS_Store" && $fichier_image!="._.DS_Store" && $fichier_image!=".DS_Store"){
  echo
     '
             <label class="product" for="Product1"><a href="produits/Product1.html">Acheter bande dessinée' .'
        <li>
          <a href='.$site.'><img src="img/to-sell/'.$fichier_image. '" alt="">
          </a>
        </li>';
  
      }
  
  
  
  }
  }
  
  
  
  
  
   ?>
  



<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <header> <img src="img/background/designs.png" class="img-fluid" alt="header SU"></header></div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   <section class="content">
    <div class="acueil">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <h3>Achetes nos articles</h3></div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <ul>

<?php toSell(); ?>

      </ul>
      </div>


      </ul></div>
  </div>
</section>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
 
@endsection