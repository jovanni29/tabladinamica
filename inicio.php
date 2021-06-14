<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="librerias/jquery-3.2.1.min.js"></script> 
    <script src="librerias/alertifyjs/alertify.js"></script> 
    <title>Inventario</title>
</head>
<body>
<?php require_once "componentes/navegacion.php";
	  ?>
   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <a href="computadora.php" title="cpu">  <img src="imagenes/cpu.png" class="d-block mx-auto" alt="..."></a>
     
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <a href="monitor.php" title="monitor"> <img src="imagenes/monitor.png" class="d-block mx-auto" alt="imagen de monitor"></a>
     
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <a href="ups.php"><img src="imagenes/ups.png" class="d-block mx-auto" alt="imagen de ups"></a>
      
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <a href="telefono.php" title="telefono"><img src="imagenes/telefono.png" class="d-block mx-auto" alt="imagen de un telefono"></a>
      
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <a href="router.php" title="router"><img src="imagenes/router.png" class="d-block mx-auto" alt="imagen de un router"></a>
       
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
    <a href="impresora.php" title="impresora"><img src="imagenes/impresora.png" class="d-block mx-auto" alt="imagen de una impresora"></a>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>   
</body>
</html>
<?php
} else {
	header("location:index.php");
	}
 ?>