<?php 
require 'conexion.php';

$email=$_POST['email'];
$password=$_POST['password'];

session_start();
$query= "SELECT * FROM usuario  WHERE  email_usuario='$email' AND clave_usuario='$password'";

conexion();
 $mysqli=$conexion->query($query);
 $fila=$mysqli->fetch_array(MYSQLI_NUM);
 if(empty($fila[0])){
 	header("location:../html/iniciar_sesion.html");
 }
else{
	$_SESSION['id_usuario']=$fila[0];
	$_SESSION['email_usuario']=$fila[1];
	header("location:../index.html");

}
 $conexion->close();
 ?>