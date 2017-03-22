<?php 
require 'conexion.php';
$codigo=$_POST['codigo'];

if ($codigo==0) {
$nombre=$_POST['nombre_agricultor'];
$apellido=$_POST['apellidos_agricultor'];
$email=$_POST['email'];
$clave=$_POST['password_agricultor'];
$dni=$_POST['dni_agricultor'];
$telefono=$_POST['telefono_agricultor'];
$direccion=$_POST['direccion_agricultor'];
conexion();
if(filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($dni, FILTER_VALIDATE_INT) && filter_var($telefono, FILTER_VALIDATE_INT)){
$query1 = "INSERT INTO usuario VALUES(NULL,'".$email."','".$clave."')";
$query2 = "INSERT INTO agricultor VALUES(NULL,'".$email."','".$nombre."','".$apellido."','".$dni."','".$telefono."','".$direccion."')";
mysqli_query($conexion, $query1);
mysqli_query($conexion, $query2);
mysqli_close($conexion);

header("location:../html/iniciar_sesion.html");
}
else{
if(filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($ruc, FILTER_VALIDATE_INT) && filter_var($telefono, FILTER_VALIDATE_INT)){
$razon_social=$_POST['razon_social_comerciante'];
$ruc=$_POST['ruc_comerciante'];
$email=$_POST['email'];
$clave=$_POST['password_comerciante'];
$telefono=$_POST['telefono_comerciante'];
$direccion=$_POST['direccion_comerciante'];

conexion();
$query1 = "INSERT INTO usuario VALUES(NULL,'".$email."','".$clave."')";
$query2 = "INSERT INTO empresa VALUES(NULL,'".$email."','".$razon_social."','".$ruc."','".$telefono."','".$direccion."')";
mysqli_query($conexion, $query1);
mysqli_query($conexion, $query2);
mysqli_close($conexion);
}
header("location:../html/iniciar_sesion.html");

}


 ?>
