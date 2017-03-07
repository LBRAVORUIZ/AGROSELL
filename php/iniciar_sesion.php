<?php 
require 'conexion.php';

$email=$_POST['email'];
$password=$_POST['password'];

session_start();
$query= "SELECT * FROM usuario  WHERE  email_usuario='$email' a AND clave_usuario='$password'";

conexion();
 $mysqli=$conexion->query($query);
 $fila=$mysqli->fetch_array(MYSQLI_NUM)
 if(empty($fila['id_usuario'])){
 	header("location:../html/iniciar_sesion.html");
 }
else{
	$_SESION['id_usuario']=$fila[0];
	$_SESION['email_usuario']=$fila[1];
	header("location:../index.html");
}
 $conexion->close();
 ?>