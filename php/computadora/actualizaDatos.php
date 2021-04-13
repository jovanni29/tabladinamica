<?php 
require_once "conexion.php";
$conexion=conexion();
$id=$_POST['id'];
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

$sql= "UPDATE computadora set nombre_gab='$a',
                             marca_gab='$b',
                             modelo_gab='$c',
                             tipo_gab='$d',
                             noserie_gab='$e',
                             estado_gab='$f',
                             comentario_gab='$g',
                             arquitectura_so='$h',
                             version_so='$i',
                             id_so='$j',
                             marca_pro='$k',
                             modelo_pro='$l',
                             frecuencia_pro='$m',
                             nucleos_pro "
echo $result=mysqli_query($conexion,$sql);
?>