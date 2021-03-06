<?php session_start();

if (!isset($_SESSION['username'])) {
  //header('locaion:../instrusment/');
  header('locaion:../myinstrusment/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Guitar-chapter3</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->

  <link href="css/bootstrap-social.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="css/small-business.css" rel="stylesheet">
  <link href="css/sidenavuser.css" rel="stylesheet">
  

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
     <a class="navbar-brand" href="../myinstrusment/" title="home"><img src="img/my instrucment 4.jpg" class = "menupicture" ></a>

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon" ></span>
    </button>
    <form action="" accept-charset="UTF-8" class="thanh-tim-kiem">

      <input autocomplete = "off"type="text" name="thanhtimkiem" placeholder=" search..." class="thanhtimkiem">
      <button tabindex="-1" type="submit" class="skill-search-button"></button>
    </form>
    <label for="toggle2" class="search" ><img src="css/css.jpg" style="width: 100%;"></label>
    <input type="checkbox" id="toggle2"/>
    <div class="list-group menu2  " style=" min-width: 100%;" >
      <form action="" accept-charset="UTF-8" class="thanh-tim-kiem2"  >
        <input autocomplete = "off"type="text" name="thanhtimkiem" placeholder=" search..." class="thanhtimkiem1" style="width:100%;">
      </form>
    </div>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../myinstrusment/">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="openNav()" > 
            <?php if(isset($_SESSION['username'])) {
              echo $_SESSION['username']; 
            } else {
              header('location:../myinstrusment/login.php');
            }

            ?> 
          </a>
        </li>
        <li class="nav-item  active">
          <div class="dropdown">
            <button type="button" class="btn btn-danger nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Learning</button>
            <div class="dropdown-menu">
              <a class="dropdown-item musictheory-title" href="music-theory.php">Music theory</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item guitar-title" href="guitar.php">Guitar</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item piano-title" href="#">Piano</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item violin-title" href="#">Violin</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item flute-title" href="#">Flute</a>
            </div>
          </div>
        </li>
        <li class="nav-item ">
          <div class="dropdown">
            <button type="button" class="btn btn-danger nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="word-spacing: 0.002em">Chord Library</button>
            <div class="dropdown-menu">
              <a class="dropdown-item guitar-title" href="#">Guitar</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item piano-title" href="#">Piano</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item violin-title" href="#">Violin</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="user.php">Hồ sơ</a>
  <div class="row">
    <button class="col-md-5 col-lg-5 col-sm-12 col-10"><a href="../myinstrusment/logout.php?action=logout">Sign Out</a></button>
    <button class="col-md-5 col-lg-5 col-sm-12 col-10"><a href="../myinstrusment/login.php">Sign In</a></button>
  </div>
</div>
<!-- Page Content -->
<div class="container">

  <div class="row">

   <div class="col-lg-3">
     <label for="toggle"><h1 class="my-4 guitar-title" >Guitar</h1></label>
     <input type="checkbox" id="toggle"/>
     <div class="list-group menu1">
      <a href="music-theory.php" class="list-group-item guitar-chapter1-title">Chapter 1: Music theory</a>
      <a href="guitar-chapter2.php" class="list-group-item guitar-chapter2-title">Chapter 2: Guitar overview </a>
      <a href="#" class="list-group-item guitar-chapter3-title">Chapter 3: Chord</a>
      <a href="#" class="list-group-item guitar-chapter4-title">Chapter 4: How to read TAB</a>
      <a href="#" class="list-group-item guitar-chapter5-title">Chapter 5: Fingerstyle's skills</a>
    </div>
    
  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 guitar-chapter2-lesson1">
          <a href="#"><img class="card-img-top" src="img/guitar.jpg"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="guitar-chapter3-game.php" class="guitar-chapter2-lesson1-title">Game</a>
            </h4>
            <h5 class="card-text">learn and memorize chords through the game</h5>
          </div>
          <div class="card-footer">
            <a href ="guitar-chapter3-game.php" class="btn btn-primary">play</a>
          </div>
        </div>
      </div>

      
      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">© 2018 My instrument
    320 studio.inc  All rights reserved. </p>
  </div>
  <!-- /.container -->
</footer>
<!--  Nav side -->
<script src="js/sidenav.js"></script>
<!--  Nav side -->
<script src="js/sidenav.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
 function openCity1(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent1");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  document.getElementById("defaultOpen").click();
</script>
</body>

</html>
