<?php 
include("conexion.php");
$id_recibido = $_GET["id_enviado"];

$borrar = "DELETE FROM marcas where id= '$id_recibido'";
$resultado = mysqli_query($conexion, $borrar);
header("Location: index.php");

?>