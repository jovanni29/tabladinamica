<?php 
require_once "../conexion.php";
$conexion=conexion();
$id=$_POST['id'];
$a=$_POST['marca'];
$b=$_POST['modelo'];
$c=$_POST['no_serie'];
$d=$_POST['estado'];

$sql= "UPDATE ups set marca='$a',
                           modelo='$b',
                           numero_serie='$c',
                           estado='$d'
                           where id='$id'";
                           echo $result=mysqli_query($conexion,$sql);

?>