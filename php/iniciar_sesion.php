<?php 
require 'conexion.php';

$email=$_POST['email'];
$password=$_POST['password'];

conexion();
$consulta="SELECT * FROM usuario  WHERE  email_usuario='".$email."' ";

if ($resultado = mysqli_query($conexion, $consulta)) {

    /* obtener el array asociativo */
    
    while ($fila = mysqli_fetch_row($resultado)) {
        printf ( $fila[0], $fila[1],$fila[2]);
    }

    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}
mysqli_close($conexion);
/*
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