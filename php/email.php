<?php 
require 'conexion.php';
$email = $_POST['email'];
conexion();

$query = "SELECT id_usuario FROM usuario WHERE email_usuario='$email'";
$resultado = $conexion->query($query);
$fila = $resultado->fetch_row();
 if (empty($fila[0])) {
      echo "ya existe este email";
 }
 else{
 	echo "hola";
 }

$conexion->close();
    

 ?>