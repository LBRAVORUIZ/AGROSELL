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
/*
echo $nombre;
echo $apellido;
echo $email;
echo $clave;
echo $dni;
echo $telefono;
echo $direccion;

*/
conexion();
$query1 = "INSERT INTO usuario VALUES(".$email."',".$clave.")";
$query2 = "INSERT INTO agricultor VALUES(".$nombre."',".$apellido.",".$dni.",".$telefono.",".$direccion.")";
mysqli_query($conexion, $query1);
mysqli_query($conexion, $query2);
mysqli_close($conexion);
}
else{
$razon_social=$_POST['razon_social_comerciante'];
$ruc=$_POST['ruc_comerciante'];
$email=$_POST['email'];
$clave=$_POST['password_comerciante'];
$telefono=$_POST['telefono_comerciante'];
$direccion=$_POST['direccion_comerciante'];
/*
echo $razon_social;
echo $ruc;
echo $email;
echo $clave;
echo $telefono;
echo $direccion;
*/
conexion();
$query1 = "INSERT INTO usuario VALUES(".$email."',".$clave.")";
$query2 = "INSERT INTO comerciante VALUES(".$razon_social."',".$ruc.",".$telefono.",".$direccion.")";
mysqli_query($conexion, $query1);
mysqli_query($conexion, $query2);
mysqli_close($conexion);

}


 ?>