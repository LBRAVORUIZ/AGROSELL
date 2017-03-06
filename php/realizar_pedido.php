<?php 

require 'conexion.php';
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$calidad=$_POST['calidad'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$direccion=$_POST['direccion'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
conexion();
$query = "INSERT INTO pedido VALUES(NULL,'".$producto."','".$cantidad."','".$calidad."','".$precio."','".$descripcion."','".$direccion."','".$imagen."')";
$mysqli=$conexion->query($query);
 
$mysqli-> close(); 
 ?>