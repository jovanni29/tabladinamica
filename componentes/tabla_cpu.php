<?php 
  require_once "../php/conexion.php";
  $conexion=conexion();
 ?>
<div class="container">
        <div>
        <h2>CPUs en inventario  </h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevo">
  Agregar nuevo
</button>
        </div>
        
        <table class="table table-bordered">
        
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de equipo</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
              </thead>
            
           <?php 
           $sql="SELECT * FROM computadora";
           $result=mysqli_query($conexion,$sql);
           while($ver=mysqli_fetch_row($result)){
             $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7].
             "||".$ver[8]."||".$ver[9]."||".$ver[10]."||".$ver[11]."||".$ver[12]."||".$ver[13]."||".$ver[14]."||".$ver[15].
             "||".$ver[16]."||".$ver[17]."||".$ver[18]."||".$ver[19];
           ?>
            <tbody>
            <tr>
            <td><?php echo $ver[0] ?></td>
            <td><?php echo $ver[1] ?></td>
            <td><?php echo $ver[2] ?></td>
            <td><?php echo $ver[3] ?></td>
            <td><?php echo $ver[4] ?></td>
            <td><button type='button' class='btn btn-warning' data-bs-toggle="modal" data-bs-target="#modalEdicion"
             onclick="agregaform('<?php echo $datos ?>')">Editar</button></td>
            <td><button type='button' class='btn btn-danger' onclick="preguntarSiNo('<?php echo $ver[0]?>')">Eliminar</button></td>
            </tr>
            </tbody>
            <?php 
            }            
            ?>
          </table>
          
         
    </div>
    
    