<?php 
include("conexion.php");
$nombre_recibido = $_POST["nombre"];
$origen_recibido = $_POST["origen"];
$logo_recibido = $_POST["logo"];
$insert ="UPDATE INTO marcas set nombre='$nombre_recibido',origen='$origen_recibido', logo='logo_recibido')";
$resultado = mysqli_query($conexion, $insert);
header("Location: index.php");

?>