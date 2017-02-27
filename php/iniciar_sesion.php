<?php 
require 'conexion.php';

$email=$_POST['email'];
$password=$_POST['password'];
echo $email;
echo $password;
/*
conexion();
$consulta="SELECT * FROM usuario  WHERE  email_usuario='".$email."' AND clave_usuario='".$password."'";
$respuesta=mysqli_query($conexion,$consulta);
if($fila=mysqli_fetch_array($respuesta))
	{   
		session_start();
		$_sesion['email_usuario']=$email;
		header('../index.html');

	}
	else
	{
		?>
<script type="text/javascript">
	
alert('Los datos ingresados son incorrectos')

location.href="../html/iniciar_sesion.html"

</script>

<?php
	}

*/

 ?>