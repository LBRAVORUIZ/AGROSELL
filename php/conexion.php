<?php

$conexion=null;
function conexion ()
{
global $conexion;

$serverName = "server25.hostinger.es"; //serverName\instanceName
$connectionInfo = array( "Database"=>"	u807939866_ags", "UID"=>"u807939866_bravo", "PWD"=>"agrosell2017");
$conexion = mysql_connect( $serverName, $connectionInfo);

if( $conexion ) {
     /*echo "Conexión establecida.<br />";*/
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( mysql_errors(), true));
}

return $conexion;
echo "conecion  establecida";
}

/*

function validarlogin ($idusuario,$contraseña)
{
	global $conexion;


	$consulta="SELECT * FROM USUARIOS  WHERE  usuario_nvar='$idusuario' AND clave_nvar='$contraseña'";
	$respuesta=mysql_query($conexion,$consulta);
	if($fila=mysql_fetch_array($respuesta))
	{   
		session_start();
		$_sesion['usuario_nvar']=$idusuario;
		return true;
	}
	else
	{
		return false;
	}
}
function desconectar()
{
	global $conexion;
}



function hainiciarsesion()
{   
	session_start();
	return true;
}

*/



?>
