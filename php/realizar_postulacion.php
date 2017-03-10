<?php 

require 'conexion.php';
session_start();

if (empty($_SESSION['id_usuario'])) {
	header("location:../html/iniciar_sesion.html");
}
else{
	
$id_usuario=$_SESSION['id_usuario'];
$id_pedido=$_SESSION['id_pedido'];
$direccion=$_POST['direccion'];
$imagen=addslashes(file_get_contents($_FILES['imagen_producto']['tmp_name']));
conexion();
$query = "INSERT INTO postulacion VALUES(NULL,'".$id_pedido."','".$id_usuario."','".$direccion."','".$imagen."')";
$mysqli=$conexion->query($query);
 
$conexion->close();
header("location:../php/mispostulaciones.php");
}
 ?>s