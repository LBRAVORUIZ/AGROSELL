
<?php
$conexion=null;
function conexion ()
{
global $conexion;

$conexion = mysqli_connect("mysql.hostinger.es", "u807939866_bravo", "agrosell2017", "u807939866_ags");

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
/*
echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
*/
return $conexion;
}

function validarlogin ($email,$contraseña)
{
	global $conexion;


	$consulta="SELECT * FROM usuario  WHERE  email_usuario='$email' AND clave_usuario='$password'";
	$respuesta=mysqli_query($conexion,$consulta);
	if($fila=mysqli_fetch_array($respuesta))
	{   
		session_start();
		$_sesion['email_usuario']=$email;
		return true;
	}
	else
	{
		return false;
	}
}
?>



