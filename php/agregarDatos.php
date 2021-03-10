<?php 
require_once "conexion.php";
$conexion=conexion();
$a=$_POST['marca'];
$b=$_POST['modelo'];
$c=$_POST['no_serie'];
$d=$_POST['estado'];

$sql= "INSERT INTO monitor (marca,modelo,numero_serie,estado) values ('$a','$b','$c','$d')";
echo $result=mysqli_query($conexion,$sql);

?>