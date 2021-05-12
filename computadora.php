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
    <script src="js/computadora.js"></script>
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
                                    <option value="dañado">dañado</option>
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
                                <label for="">Tamaño(GB)</label>
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
                                    <option value="dañado">dañado</option>
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
                                <label for="">Tamaño(GB)</label>
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
    <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabla').load('componentes/tabla_cpu.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#guardarnuevo').click(function() {
            nombre_gab= $('#nombre_gab').val();
            marca_gab=$('#marca_gab').val();
            modelo_gab=$('#modelo_gab').val();
            tipo_gab=$('#tipo_gab').val();
            noserie_gab=$('#noserie_gab').val();
            estado_gab=$('#estado_gab').val();
            comentario_gab=$('#comentario_gab').val();
            ariquetectura_so=$('#arquitectura_so').val();
            version_so=$('#version_so').val();
            id_so=$('#id_so').val();
            marca_pro=$('#marca_pro').val();
            modelo_pro=$('#modelo_pro').val();
            frecuencia_pro=$('#frecuencia_pro').val();
            nucleos_pro=$('#nucleos_pro').val();
            hilos_pro=$('#nucleos_pro').val();
            marca_ram=$('#marca_ram').val();
            tipo_ram=$('#tipo_ram').val();
            tamano_ram=$('#tamano_ram').val();
            frecuencia_ram=$('#frecuencia_ram').val();

            agregardatos(nombre_gab, marca_gab, modelo_gab, tipo_gab, noserie_gab, estado_gab, comentario_gab, ariquetectura_so,
            version_so, id_so, marca_pro, modelo_pro, frecuencia_pro, nucleos_pro, hilos_pro, marca_ram, tipo_ram, tamano_ram, frecuencia_ram);
        });

        $('#actualizaDatos').click(function() {
            actualizaDatos();
        });
    });
</script>