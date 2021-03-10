<?php 
  require_once "../php/conexion.php";
  $conexion=conexion();
 ?>
<div class="container">
        <div>
        <h2>UPS en inventario  </h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevo">
  Agregar nuevo
</button>
        </div>
        
        <table class="table table-bordered">
        
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">No. Serie</th>
                <th scope="col">Estado</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
              </thead>
            
           <?php 
           $sql="SELECT * FROM ups";
           $result=mysqli_query($conexion,$sql);
           while($ver=mysqli_fetch_row($result)){
           ?>
            <tbody>
            <tr>
            <td><?php echo $ver[0] ?></td>
            <td><?php echo $ver[1] ?></td>
            <td><?php echo $ver[2] ?></td>
            <td><?php echo $ver[3] ?></td>
            <td><?php echo $ver[4] ?></td>
            <td><button type='button' class='btn btn-warning' data-bs-toggle="modal" data-bs-target="#modalEdicion">Editar</button></td>
            <td><button type='button' class='btn btn-danger'>Eliminar</button></td>
            </tr>
            </tbody>
            <?php 
            }            
            ?>
          </table>
          
         
    </div>
    