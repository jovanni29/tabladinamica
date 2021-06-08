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
  <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <script src="librerias/jquery-3.2.1.min.js"></script> 
    <script src="js/funciones.js"></script>
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
   <!-- MODAL PARA REGISTRO NUEVO -->
   
   

  <!-- Modal -->
  
<div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar monitor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
                   
                        <div class="row">
                        <div class="col">
                            <label for="">Marca</label>
                            <input class="form-control" type="text" id="marca" required>
                        </div>
                        <div class="col">
                            <label for="">Modelo</label>
                            <input class="form-control" type="text" id="modelo" required>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col">
                            <label for="">Numero de serie</label>
                            <input class="form-control" type="text" id="no_serie" required>
                        </div>
                        <div class="col">
                        <label for="">Estado</label>
                            <select class="form-select" name="" id="estado">
                            <option value="funciona">funciona</option>
                            <option value="no funciona">no funciona</option>
                            <option value="dañado">dañado</option>
                            </select>
                        </div>
                    </div>
                                  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="guardarnuevo">Registrar</button>
        
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
                          <input type="text" hidden="" id="idmonitor" >
                            <label for="">Marca</label>
                            <input class="form-control" type="text" id="marcau">
                        </div>
                        <div class="col">
                            <label for="">Modelo</label>
                            <input class="form-control" type="text" id="modelou">
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col">
                            <label for="">Numero de serie</label>
                            <input class="form-control" type="text" id="no_serieu">
                        </div>
                        <div class="col">
                        <label for="">Estado</label>
                            <select class="form-select" name="" id="estadou">
                            <option value="funciona">funciona</option>
                            <option value="no funciona">no funciona</option>
                            <option value="dañado">dañado</option>
                            </select>
                        </div>
                    </div>
                   
                    </fieldset>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="actualizaDatos">Actualizar</button>
      </div>
    </div>
  </div>
</div>

      <!--TERMINA Modal editar registro -->
    <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('componentes/tabla_monitor.php');
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#guardarnuevo').click(function(){
        // if($('#marca').val()==""){
        //   alertify.alert("debes agregar la marca");
        //   return false;
        // } else if($('#modelo').val()==""){
        //   alertify.alert("debes agregar el modelo");
        //   return false;
        // } else if($('#no_serie').val()==""){
        //   alertify.alert("debes agregar el numero de serie");
        //   return false;
        // } else if(){
          
        // }
         marca=$('#marca').val();
         modelo=$('#modelo').val();
         no_serie=$('#no_serie').val();
         estado=$('#estado').val();
         agregardatos(marca, modelo, no_serie, estado);
      });

      $('#actualizaDatos').click(function(){
        actualizaDatos();
      });
    });
    </script>
  