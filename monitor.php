<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"> -->
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
    <div id="tabla">
    
   
    </div>
   <!-- Modal agregar nuevo registro -->
   
   

  <!-- Modal -->
<div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar monitor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="">
                    <fieldset>
                        <legend>Datos del monitor</legend>
                        <div class="row">
                        <div class="col">
                            <label for="">Marca</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col">
                            <label for="">Modelo</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Tamaño (pulgadas)</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col">
                            <label for="">Numero de serie</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Tipo de pantalla</label>
                            <select class="form-select" name="" id="">
                                <option value="">LCD</option>
                                <option value="">LED</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Estado</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    </fieldset>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>


      
  
      <!--TERMINA Modal agregar nuevo registro -->

      <!-- Modal editar registro -->
      <div class="modal fade" id="modalEdicion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar monitor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="">
                    <fieldset>
                        <legend>Datos del monitor</legend>
                        <div class="row">
                        <div class="col">
                            <label for="">Marca</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col">
                            <label for="">Modelo</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Tamaño (pulgadas)</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col">
                            <label for="">Numero de serie</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Tipo de pantalla</label>
                            <select class="form-select" name="" id="">
                                <option value="">LCD</option>
                                <option value="">LED</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Estado</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    </fieldset>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>
      <!--TERMINA Modal editar registro -->
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('componentes/tabla_monitor.php');
    });
    </script>