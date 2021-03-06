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
    <script src="js/computadora.js"></script>
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
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar CPU</h5>
                    <button type="button" class="btn-close" data-bsrc-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <fieldset>
                        <legend>Datos del gabinete</legend>

                        <div class="row">
                            <div class="col">
                                <label for="">Nombre del dispositivo</label>
                                <input class="form-control" type="text" id="nombre_gab" required>
                            </div>
                            <div class="col">
                                <label for="">Marca</label>
                                <input class="form-control" type="text" id="marca_gab" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Modelo</label>
                                <input class="form-control" type="text" id="modelo_gab">
                            </div>
                            <div class="col">
                                <label for="">Tipo</label>
                                <select class="form-select" name="" id="tipo_gab">
                                    <option value="tower">tower</option>
                                    <option value="all in one">all in one</option>
                                    <option value="mini tower">mini tower</option>
                                    <option value="desktop">desktop</option>
                                    <option value="laptop">laptop</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <label for="">Numero de serie</label>
                                <input class="form-control" type="text" id="noserie_gab" required>
                            </div>
                            <div class="col">
                                <label for="">Estado</label>
                                <select class="form-select" name="" id="estado_gab">
                                    <option value="bodega">bodega</option>
                                    <option value="buenas condiciones">buenas condiciones</option>
                                    <option value="da??ado">da??ado</option>
                                    <option value="falta de refacciones">falta de refacciones </option>
                                    <option value="malas condiciones">malas condiciones</option>
                                    <option value="nuevo">nuevo</option>
                                    <option value="regular">regular</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Comentarios</label>
                                <textarea class="form-control" name="" id="comentario_gab" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <hr>
                    <fieldset>
                        <legend>Datos del sistema operativo windows</legend>
                        <div class="row">
                            
                            <div class="col">
                                <label for="">Arquitectura</label>
                                <select class="form-select" name="" id="arquitectura_so">
                                    <option value="32-bit">32-bit</option>
                                    <option value="64-bit">64-bit</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Version</label>
                                <select class="form-select" name="" id="version_so">
                                    <option value="7">7</option>
                                    <option value="10">10</option>
                                </select>

                            </div>
                            <div class="col">
                                <label for="">Product ID</label>
                                <input class="form-control" type="text" id="id_so">
                            </div>
                        </div>
                    </fieldset>
                    <hr>
                    <fieldset>
                        <legend>Datos del procesador</legend>
                        <div class="row">
                            <div class="col">
                                <label for="">Marca</label>
                                <select class="form-select" name="" id="marca_pro">
                                    <option value="Intel">Intel</option>t
                                    <option value="AMD">AMD</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Modelo</label>
                                <input class="form-control" type="text" id="modelo_pro">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Frecuencia (MHz)</label>
                                <input class="form-control" type="number" name="" id="frecuencia_pro">
                            </div>
                            <div class="col">
                                <label for="">Numero de nucleos</label>
                                <input class="form-control" type="number" name="" id="nucleos_pro">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Numero de hilos</label>
                                <input class="form-control" type="number" name="" id="hilos_pro">
                            </div>
                            <div class="col">
                            </div>
                        </div>

                    </fieldset>
                    <fieldset>
                        <legend>Memoria RAM</legend>
                        <div class="row">
                            <div class="col">
                                <label for="">Marca</label>
                                <input class="form-control" type="text" id="marca_ram">
                            </div>
                            <div class="col">
                                <label for="">Tipo</label>
                                <select class="form-select" name="" id="tipo_ram">
                                    <option value="DDR3">DDR3</option>
                                    <option value="DDR4">DDR4</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Tama??o(GB)</label>
                                <input class="form-control" type="number" name="" id="tamano_ram">
                            </div>
                            <div class="col">
                                <label for="">Frecuencia (MHz)</label>
                                <input class="form-control" type="number" name="" id="frecuencia_ram">
                            </div>
                        </div>
                    </fieldset>



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
                    <h5 class="modal-title" id="exampleModalLabel">Editar CPU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <fieldset>
                        <legend>Datos del gabinete</legend>

                        <div class="row">
                            <div class="col">
                            <input type="text" hidden="" id="idcomputadora" >
                                <label for="">Nombre del dispositivo</label>
                                <input class="form-control" type="text" id="nombre_gabu" required>
                            </div>
                            <div class="col">
                                <label for="">Marca</label>
                                <input class="form-control" type="text" id="marca_gabu" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Modelo</label>
                                <input class="form-control" type="text" id="modelo_gabu">
                            </div>
                            <div class="col">
                                <label for="">Tipo</label>
                                <select class="form-select" name="" id="tipo_gabu">
                                    <option value="tower">tower</option>
                                    <option value="all in one">all in one</option>
                                    <option value="mini tower">mini tower</option>
                                    <option value="desktop">desktop</option>
                                    <option value="laptop">laptop</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <label for="">Numero de serie</label>
                                <input class="form-control" type="text" id="noserie_gabu" required>
                            </div>
                            <div class="col">
                                <label for="">Estado</label>
                                <select class="form-select" name="" id="estado_gabu">
                                    <option value="bodega">bodega</option>
                                    <option value="buenas condiciones">buenas condiciones</option>
                                    <option value="da??ado">da??ado</option>
                                    <option value="falta de refacciones">falta de refacciones </option>
                                    <option value="malas condiciones">malas condiciones</option>
                                    <option value="nuevo">nuevo</option>
                                    <option value="regular">regular</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Comentarios</label>
                                <textarea class="form-control" name="" id="comentario_gabu" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <hr>
                    <fieldset>
                        <legend>Datos del sistema operativo windows</legend>
                        <div class="row">
                           
                            <div class="col">
                                <label for="">Arquitectura</label>
                                <select class="form-select" name="" id="arquitectura_sou">
                                    <option value="32-bit">32-bit</option>
                                    <option value="64-bit">64-bit</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Version</label>
                                <select class="form-select" name="" id="version_sou">
                                    <option value="7">7</option>
                                    <option value="10">10</option>
                                </select>

                            </div>
                            <div class="col">
                                <label for="">Product ID</label>
                                <input class="form-control" type="text" id="id_sou">
                            </div>
                        </div>
                    </fieldset>
                    <hr>
                    <fieldset>
                        <legend>Datos del procesador</legend>
                        <div class="row">
                            <div class="col">
                                <label for="">Marca</label>
                                <select class="form-select" name="" id="marca_prou">
                                    <option value="Intel">Intel</option>t
                                    <option value="AMD">AMD</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Modelo</label>
                                <input class="form-control" type="text" id="modelo_prou">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Frecuencia (MHz)</label>
                                <input class="form-control" type="number" name="" id="frecuencia_prou">
                            </div>
                            <div class="col">
                                <label for="">Numero de nucleos</label>
                                <input class="form-control" type="number" name="" id="nucleos_prou">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Numero de hilos</label>
                                <input class="form-control" type="number" name="" id="hilos_prou">
                            </div>
                            <div class="col">
                            </div>
                        </div>

                    </fieldset>
                    <fieldset>
                        <legend>Memoria RAM</legend>
                        <div class="row">
                            <div class="col">
                                <label for="">Marca</label>
                                <input class="form-control" type="text" id="marca_ramu">
                            </div>
                            <div class="col">
                                <label for="">Tipo</label>
                                <select class="form-select" name="" id="tipo_ramu">
                                    <option value="DDR3">DDR3</option>
                                    <option value="DDR4">DDR4</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Tama??o(GB)</label>
                                <input class="form-control" type="number" name="" id="tamano_ramu">
                            </div>
                            <div class="col">
                                <label for="">Frecuencia (MHz)</label>
                                <input class="form-control" type="number" name="" id="frecuencia_ramu">
                            </div>
                        </div>
                    </fieldset>



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
    $(document).ready(function() {
        $('#tabla').load('componentes/tabla_cpu.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#guardarnuevo').click(function(){
        if($('#nombre_gab').val()==""){
          alertify.alert("Debes agregar el nombre del gabinete :)");
          return false;
        } else if($('#marca_gab').val()==""){
          alertify.alert("Debes agregar la marca del gabinete :)");
          return false;
        } else if($('#modelo_gab').val()==""){
          alertify.alert("Debes agregar el modelo del gabinete :)");
          return false;
        } 
        else if($('#tipo_gab').val()==""){
          alertify.alert("Debes agregar el tipo de gabinete :)");
          return false;
        }
        else if($('#noserie_gab').val()==""){
          alertify.alert("Debes agregar el numero de serie del gabinete :)");
          return false;
        }
        else if($('#estado_gab').val()==""){
          alertify.alert("Debes agregar el estado del gabinete :)");
          return false;
        }
        
        else if($('#arquitectura_so').val()==""){
          alertify.alert("Debes agregar la arquitectura del SO :)");
          return false;
        }
        else if($('#version_so').val()==""){
          alertify.alert("Debes agregar la version del SO :)");
          return false;
        }   
        else if($('#id_so').val()==""){
          alertify.alert("Debes agregar el id del SO :)");
          return false;
        }  
        else if($('#marca_pro').val()==""){
          alertify.alert("Debes agregar la marca del procesador :)");
          return false;
        }  
        else if($('#modelo_pro').val()==""){
          alertify.alert("Debes agregar el modelo del procesador :)");
          return false;
        } 
        else if($('#frecuencia_pro').val()==""){
          alertify.alert("Debes agregar la frecuencia del procesador :)");
          return false;
        } 
        else if($('#nucleos_pro').val()==""){
          alertify.alert("Debes agregar los nucleos del procesador :)");
          return false;
        } 
        else if($('#hilos_pro').val()==""){
          alertify.alert("Debes agregar los hilos del procesador :)");
          return false;
        } 
        
        else if($('#marca_ram').val()==""){
          alertify.alert("Debes agregar la marca de la memoria ram :)");
          return false;
        } 
        else if($('#tipo_ram').val()==""){
          alertify.alert("Debes agregar el tipo de ram :)");
          return false;
        } 
        else if($('#tamano_ram').val()==""){
          alertify.alert("Debes agregar el tama??o de la memoria ram :)");
          return false;
        } 
        else if($('#frecuencia_ram').val()==""){
          alertify.alert("Debes agregar la frecuencia de la ram :)");
          return false;
        } 
        


         

        cadena="nombre_gab=" + $('#nombre_gab').val() +
					"&marca_gab=" + $('#marca_gab').val() +
					"&modelo_gab=" + $('#modelo_gab').val() + 
					"&tipo_gab=" + $('#tipo_gab').val()+
					"&noserie_gab=" + $('#noserie_gab').val() +
					"&estado_gab=" + $('#estado_gab').val() + 
					"&comentario_gab=" + $('#comentario_gab').val()+
					"&arquitectura_so=" + $('#arquitectura_so').val() +
					"&version_so=" + $('#version_so').val() + 
					"&id_so=" + $('#id_so').val()+
					"&marca_pro=" + $('#marca_pro').val() +
					"&modelo_pro=" + $('#modelo_pro').val() + 
					"&frecuencia_pro=" + $('#frecuencia_pro').val()+
					"&nucleos_pro=" + $('#nucleos_pro').val() +
					"&hilos_pro=" + $('#hilos_pro').val() + 
					"&marca_ram=" + $('#marca_ram').val()+
					"&tipo_ram=" + $('#tipo_ram').val() +
					"&tamano_ram=" + $('#tamano_ram').val() + 
					"&frecuencia_ram=" + $('#frecuencia_ram').val();

          $.ajax({
        type: "POST",
        url: "php/computadora/agregarDatos.php",
        data: cadena,
        success: function (r) {
            
            if (r== 1) {
                $('#tabla').load('componentes/tabla_cpu.php');
                $('#modalNuevo').modal("hide");
               // $('#modalNuevo')[0].reset();
                alertify.success("Agregado con exito");

                
                
            } else {
                alertify.error("Ocurrio un error");
            }
        }
    });

        
      });


        // $('#guardarnuevo').click(function() {
        //     nombre_gab= $('#nombre_gab').val();
        //     marca_gab=$('#marca_gab').val();
        //     modelo_gab=$('#modelo_gab').val();
        //     tipo_gab=$('#tipo_gab').val();
        //     noserie_gab=$('#noserie_gab').val();
        //     estado_gab=$('#estado_gab').val();
        //     comentario_gab=$('#comentario_gab').val();
        //     ariquetectura_so=$('#arquitectura_so').val();
        //     version_so=$('#version_so').val();
        //     id_so=$('#id_so').val();
        //     marca_pro=$('#marca_pro').val();
        //     modelo_pro=$('#modelo_pro').val();
        //     frecuencia_pro=$('#frecuencia_pro').val();
        //     nucleos_pro=$('#nucleos_pro').val();
        //     hilos_pro=$('#nucleos_pro').val();
        //     marca_ram=$('#marca_ram').val();
        //     tipo_ram=$('#tipo_ram').val();
        //     tamano_ram=$('#tamano_ram').val();
        //     frecuencia_ram=$('#frecuencia_ram').val();

        //     agregardatos(nombre_gab, marca_gab, modelo_gab, tipo_gab, noserie_gab, estado_gab, comentario_gab, ariquetectura_so,
        //     version_so, id_so, marca_pro, modelo_pro, frecuencia_pro, nucleos_pro, hilos_pro, marca_ram, tipo_ram, tamano_ram, frecuencia_ram);
        // });

        $('#actualizaDatos').click(function() {
            actualizaDatos();
        });
    });
</script>
<script type="text/javascript">
    $('#modalNuevo').on('show.bs.modal', function (event) {
    $("#modalNuevo input").val("");
    $("#modalNuevo textarea").val("");
    $("#modalNuevo #tipo_gab").val("tower");
    $("#modalNuevo #estado_gab").val("bodega");
    $("#modalNuevo #arquitectura_so").val("32-bit");
    $("#modalNuevo #version_so").val("7");
    $("#modalNuevo #marca_pro").val("Intel");
    $("#modalNuevo #tipo_ram").val("DDR3");
   
   
    
});
    </script>
<?php
} else {
	header("location:index.php");
	}
 ?>