<?php 

require 'conexion.php';
session_start();

if (empty($_SESSION['id_usuario'])) {
	header("location:../html/iniciar_sesion.html");
}
else{
	
$usuario=$_SESSION['id_usuario'];
$producto=$_POST['producto'];
$categoria=$_POST['categoria'];
$cantidad=$_POST['cantidad'];
$calidad=$_POST['calidad'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$direccion=$_POST['direccion'];

$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
conexion();
$query = "INSERT INTO pedido VALUES(NULL,'".$usuario."','".$producto."','".$categoria."','".$cantidad."','".$calidad."','".$precio."','".$descripcion."','".$direccion."','".$imagen."')";
$mysqli=$conexion->query($query);
 
$conexion->close();
header("location:../php/mispedidos.php");
}
 ?>