@extends ('layouts.app')
@section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <header> <img src="img/background/designs.png" class="img-fluid" alt="header SU"></div>
  <section class="content">
    <div class="portofolio">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <h3>Informations</h3></div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <ul>

    <?php
    $labels=array("John Wick","Wonder Woman","Night Hawk");

function showImage(){
$directory = 'img/portofolio-min';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));


foreach($scanned_directory as $fichier_image){
   if($fichier_image!="hopper-portrait.jpg"&& $fichier_image!="." && $fichier_image!=".." &&$fichier_image!=".DS_Store" && $fichier_image!="._.DS_Store" && $fichier_image!=".DS_Store"){
     echo '<li>
       <a href="img/portofolio/'. $fichier_image. '"data-rel="lightcase:peintures"><img src="img/portofolio-min/'.$fichier_image. '" alt="">
       </a>
     </li>';

   }


}
}
function label(){
$labels=array(" John Wick"," Wonder Woman"," Night Hawk", " Dakota North"," Dare Devil"," Captain Marvel"," Captain America");
for($i=0;$i<=5;$i++){ echo $labels[$i]; };
}

//function count_page(){  $rep='./';   $scan_rep=array_diff(scandir($rep), array('..', '.')); foreach($scan_rep as $site){  if($site=="Product1.php" || $site=="Product2.php" || $site=="Product3.php"){    echo $site;}}}
  //$rep='./';
  //$scan_rep=array_diff(scandir($rep), array('..', '.'));
//foreach($scan_rep as $site){

  //if($site=="Product1.php" || $site=="Product2.php" || $site=="Product3.php"){

    //echo $site;
//  }
//}
//}

function toSell(){
  $rep='./';
    $scan_rep=array_diff(scandir($rep), array('..', '.'));
  foreach($scan_rep as $site){  if($site=="Product1.php" || $site=="Product2.php" || $site=="Product3.php"){    return $site;}}
  $directory = 'docs/img/to-sell';
  $scanned_directory = array_diff(scandir($directory), array('..', '.'));


foreach($scanned_directory as $fichier_image){

   if($fichier_image!="hopper-portrait.jpg"&& $fichier_image!="." && $fichier_image!=".." &&$fichier_image!=".DS_Store" && $fichier_image!="._.DS_Store" && $fichier_image!=".DS_Store"){
echo
   '
           <label class="product" for="Product1"><a href="Product1.html">Acheter bande dessinée' .'
      <li>
        <a href='.$site.'><img src="docs/img/to-sell/'.$fichier_image. '" alt="">
        </a>
      </li>';

    }



}
}





 ?>
<?php echo showImage(); ?>
    </ul>
  </div>
</section>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
</div>
@endsection