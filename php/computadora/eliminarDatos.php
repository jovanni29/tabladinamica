<?php 
require_once "../conexion.php";
$conexion=conexion();
$id=$_POST['id'];

$sql="DELETE from computadora where id_computadora='$id'";
echo $result=mysqli_query($conexion, $sql);
?>