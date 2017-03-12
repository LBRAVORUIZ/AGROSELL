<?php 
require 'conexion.php';
$email = $_POST['email'];
echo $email;
conexion();
$query = "SELECT email_usuario FROM usuario WHERE email_usuario='$email'";
 if ($resultado = $conexion->query($query)) {
      echo "ya existe este email";
 }

$conexion->close();
    

 ?>