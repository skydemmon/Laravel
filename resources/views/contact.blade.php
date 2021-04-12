@extends ('layouts.app')
@section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <header> <img src="img/background/designs.png" class="img-fluid" alt="header SU"></header></div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   <section class="content">
    <div class="acueil">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <h3>Informations</h3></div>

    <div class="contact">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
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


        </ul></div>


  </div>
  
  
@endsection