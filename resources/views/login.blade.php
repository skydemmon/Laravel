@extends ('layouts.app')
@section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <header> <img src="img/background/designs.png" class="img-fluid" alt="header SU"></header></div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   <section class="content">
    <div class="acueil">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  <h3>Informations</h3></div>

    <div class="login">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <form action=".php" method="post">
        <div class="imgcontainer">
          <img src="img/avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container2">
          <label for="uname" style="color:white;"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw" style="color:white;"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
    <div class="lgin">
          <button type="submit">Login</button></div>
          <div class="color">
          <label>
            <input type="checkbox" checked="checked" name="remember"> remember me
          </label>
        </div>
        </div>

        <div class="container">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Make <a href="cra.php">an account</a></span>
        </div>
      </form>



      </ul></div>
  </div>
</section>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">



  
  
@endsection