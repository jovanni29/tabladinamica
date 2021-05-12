<?php 
require_once "../conexion.php";
$conexion=conexion();
$a=$_POST['nombre_gab'];
$b=$_POST['marca_gab'];
$c=$_POST['modelo_gab'];
$d=$_POST['tipo_gab'];
$e=$_POST['noserie_gab'];
$f=$_POST['estado_gab'];
$g=$_POST['comentario_gab'];
$h=$_POST['arquitectura_so'];
$i=$_POST['version_so'];
$j=$_POST['id_so'];
$k=$_POST['marca_pro'];
$l=$_POST['modelo_pro'];
$m=$_POST['frecuencia_pro'];
$n=$_POST['nucleos_pro'];
$o=$_POST['hilos_pro'];
$p=$_POST['marca_ram'];
$q=$_POST['tipo_ram'];
$r=$_POST['tamano_ram'];
$s=$_POST['frecuencia_ram'];

$sql= "INSERT INTO computadora (nombre_gab, marca_gab, modelo_gab, tipo_gab, noserie_gab, estado_gab, comentario_gab, 
arquitectura_so, version_so, id_so, marca_pro, modelo_pro, frecuencia_pro, nucleos_pro, hilos_pro, marca_ram, tipo_ram, tamano_ram,
frecuencia_ram) values ('$a','$b','$c','$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s')";
echo $result=mysqli_query($conexion,$sql);
?>