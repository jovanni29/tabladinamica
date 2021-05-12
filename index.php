<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"-->
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="librerias/jquery-3.2.1.min.js"></script>
   <!-- <script src="librerias/bootstrap/js/bootstrap.js"></script> -->
    <script src="librerias/alertifyjs/alertify.js"></script>
    <title>Inventario</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="radar.png" alt="" width="50" height="35" class="d-inline-block align-top">
        Radar Custom&Logistics  
      </a>
      <a class="nav-link" href="computadora.php">Computadora</a>
            <a class="nav-link" href="monitor.php">Monitor</a>
            <a class="nav-link" href="ups.php">UPS</a>
            <a class="nav-link" href="telefono.php">Telefono</a>
            <a class="nav-link" href="router.php">Router</a>
            <a class="nav-link" href="impresora.php">Impresora</a>
     
    </div>
    </nav>
    <div class="container-sm">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="ups.jpg" class="d-block w-100" alt="..."  height="800">
      <div class="carousel-caption d-none d-md-block">
        <h5>UPS</h5>
        <p>es un sistema que se coloca entre el suministro de energía principal y
         equipos eléctricos/electrónicos con el propósito de abastecer de energía (corriente alterna) y permitir la correcta operación por 
        un cierto tiempo de respaldo a los equipos conectados en caso de un corte total de energía en el suministro principal</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="monitor.jpg" class="d-block w-100" alt="..." height="900">
      <div class="carousel-caption d-none d-md-block">
        <h5>Monitor</h5>
        <p>Periférico para visualizar los datos que muestra un ordenador,
         o como dice su definición técnica, «un dispositivo de salida de datos».</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="cpu.jpg" class="d-block w-100" alt="..." height="900">
      <div class="carousel-caption d-none d-md-block">
        <h5>Computadora</h5>
        <p>Se denomina como computadora de escritorio, computador de escritorio, ordenador
         de sobremesa u ordenador fijo a un tipo de ordenador personal, diseñado y fabricado
          para ser instalado en una ubicación estática, como un escritorio o mesa, a diferencia
           de otras computadoras similares, como la computadora portátil, cuya ubicación es dinámica.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="monitor2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>