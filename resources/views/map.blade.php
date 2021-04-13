@extends ('layouts.app')
@section('content')
<?php
function showMap(){

echo ' <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h3>Trouver nous Ici!</h3>
        <ul>
          <label class="video" for="Product1">Lycee Edmon Michelet Arpajon(91) </label>
        <li><div style="width: 100%"><iframe width="80%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Arpajon+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe></div><br /></li>
          <label class="video" for="Product1" style="color:white;">e-mail: fdesigns@gmail.com</label><br>
              <label class="video" for="Product1">tel:  06 30 20 40 93</label><br>
                  <label class="video" for="Product1">tel:  +33 04 32 24 45</label>
        </div>


        </ul></div>';



}



function contact(){

echo  '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <form action="" method="post">
                    <h4>Formulaire de Contact</h4>
                    <input type="text" id="nom" name="nom" placeholder="Nom">
                    <br>
                    <input type="text" id="mail" name="mail" placeholder="Mail">
                    <br>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                    <p id="statut"></p>
                    <button>Envoyer</button>
                </form>
        </div>


        </ul></div>';


  }





  ?>

<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <header> <img src="img/background/designs.png" class="img-fluid" alt="header SU"></header></div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   <section class="content">
    <div class="acueil">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <h3>Informations</h3></div>
    <div class="contact">
      <?php echo showMap(); ?>
  </div>
</section>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

  
@endsection