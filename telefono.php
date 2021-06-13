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
    <script src="js/telefono.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script> 
    <title>Inventario</title>
</head>
<body>
<?php require_once "componentes/navegacion.php";
	  ?>
    <div id="tabla">
    
   
    </div>
   <!-- MODAL PARA REGISTRO NUEVO -->
   
   

  <!-- Modal -->
<div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar telefono</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Editar mtelefono</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="">
                    <fieldset>
                        <legend>Datos del telefono</legend>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('componentes/tabla_telefono.php');
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#guardarnuevo').click(function(){
        if($('#marca').val()==""){
          alertify.alert("Debes agregar la marca :)");
          return false;
        } else if($('#modelo').val()==""){
          alertify.alert("Debes agregar el modelo :)");
          return false;
        } else if($('#no_serie').val()==""){
          alertify.alert("Debes agregar el numero de serie :)");
          return false;
        } 

        cadena="marca=" + $('#marca').val() +
					"&modelo=" + $('#modelo').val() +
					"&no_serie=" + $('#no_serie').val() + 
					"&estado=" + $('#estado').val();

          $.ajax({
        type: "POST",
        url: "php/telefono/agregarDatos.php",
        data: cadena,
        success: function (r) {
            
            if (r== 1) {
                $('#tabla').load('componentes/tabla_telefono.php');
                $('#modalNuevo').modal("hide");
               // $('#modalNuevo')[0].reset();
                alertify.success("Agregado con exito");

                
                
            } else {
                alertify.error("Ocurrio un error");
            }
        }
    });

        
      });

      $('#actualizaDatos').click(function(){
        actualizaDatos();
      });
    });
    </script>
    <script type="text/javascript">
    $('#modalNuevo').on('show.bs.modal', function (event) {
    $("#modalNuevo input").val("");
   
    $("#modalNuevo select").val("funciona");
    
});
    </script>
       <?php
} else {
	header("location:index.php");
	}
 ?>