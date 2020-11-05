<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QUIZBEE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/gravitas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/vitnav.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="css/foot.css">
    <script src="https://kit.fontawesome.com/8f045748b8.js" crossorigin="anonymous"></script>

    <link rel="icon" href="images/Quizbee.png" type="image/gif">

  </head>
  <body>
    <!-- <h1>TESTING</h1> -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
  <a class="nav-link" href="login.php" id="mathbee" style="color:white">Login<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
  <a class="nav-link ali" href="about.php" style="color:white;margin-top: 0.55rem;">AboutUs<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
    <a class="navbar-brand" href="index.php"><img class="backs" src="images/Quizbee.png"></a>
  </li>
<li class="nav-item active">
  <a class="nav-link ali" href="about.php" style="color:white;margin-top: 0.55rem;">ContactUs<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
  <a class="nav-link ali" href="register.php" style="color:white;margin-top: 0.55rem;">Register<span class="sr-only">(current)</span></a>
</li>
</ul>
</div>
</div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-pause="false">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images\b2s (6).png" class="d-block w-100" alt="b2s">
    <div class="carousel-caption">
      <h1 class="Event animate__animated animate__fadeInDown">Quizbee</h1>
    </div>
  </div>
  <div class="carousel-item">
    <img src="images\Car_math.png" class="d-block w-100" alt="mathbee">
    <div class="carousel-caption">
      <h1 class="Event animate__animated animate__fadeInLeftBig ">MATHBEE</h1>
    </div>
  </div>
  <div class="carousel-item">
    <img src="images\spellbee.png" class="d-block w-100" alt="spellbee">
    <div class="carousel-caption">
      <h1 class="Event animate__animated animate__fadeInRightBig">SPELLBEE</h1>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

</div>
<div class="container">
	<h1 id="head"><img class="img-fluid" src="images/Quizbee.png" alt="Qb" style="width: 10rem;"></h1>
	<p id="brief" class="lead" style="color:white;">It is a fully integrated open platform for students from classes 3 to 12,  to show their IQ and explore their skills. The competition uses a combination of children's natural desire to compete and participate effectively to hone their skills in competitions like MATH BEE and SPELL BEE. The event goes on for two days and aims at nurturing mathematical and vocabulary skills among children in a challenging environment. It encourages children to participate, on equal basis, solely with the aim of familiarizing  them with the contest to achieve extraordinary levels of speed and accuracy with their skills.</p>
</div>
<br>
<br>
<div class="container cards">
 <div class="row justify-content-between">
   <div class="col-md-6 col-12 mb-md-0 mb-4 ">
     <div class="yes">
       <h3 class="pass">SPELL BEE</h3>
        <h4 class="seven">CLASS 3-10</h4>
        <form action="spell_des.php"  method="POST">
      <button type="submit" id="btn_spellbee" style="color:white;" class="btn btn-outline-dark but">Click Here!</button>
       </form>
  </div>
   </div>
      <div class="col-md-6 col-12">
     <div class="yes">
       <h3 class="pass">MATH BEE</h3>
      <h4 class="seven">CLASS 3-10</h4>
      <form action="math_des.php" method="POST">
      <button type="submit" id="btn_mathbee" style="color:white;" class="btn btn-outline-dark but">Click Here!</button>
      </form>

    </div>
     </div>
   </div>
 </div>

</div>
<footer class="footer">
  <div class="container">
      <div class="row">

          <div class="col-12 col-sm-6 footer-joinus">
              <span class="footer-joinus-text">Have something to post or suggest?</span>
              <a class="footer-joinus_button" href="mailto: quizbee@gmail.com">Mail us</a>
          </div>
          <div class="col-12 col-sm-6 align-self-center ">
              <div class="text-center">
                  <a class="btn btn-social-icon btn-google" href="https://www.instagram.com/"><i class="fa fa-instagram fa-lg"></i></a>
                  <a class="btn btn-social-icon btn-google" href="tel:1234567890"><i class="fas fa-phone"></i></a>
              </div>
          </div>
     </div>
     <div class="row justify-content-center" style="margin-top: 10px;">
          <div class="col-auto">
              <p>© Copyright 2020 IWP</p>
          </div>
     </div>
  </div>
</footer>
<script>
  var burger = document.getElementById("burger");
var menu = document.getElementById("menu");

burger.addEventListener("click", () => {
$("#menu").slideToggle("medium");
menu.classList.toggle("hidden");

burger.classList.toggle('toggle');
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>var contact=document.getElementById("contact");
  function scroll_contact()
  {contact.scrollIntoView({behavior: "smooth"});
  }</script>


<script>var contact=document.getElementById("contact");
  function scroll_contact()
  {contact.scrollIntoView({behavior: "smooth"});
  }</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
