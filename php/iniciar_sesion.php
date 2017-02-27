<?php 
require 'conexion.php';

$email=$_POST['email'];
$password=$_POST['password'];

conexion();
$consulta="SELECT * FROM usuario  WHERE  email_usuario='".$email."' ";

if ($resultado = mysqli_query($conexion, $consulta)) {

    /* obtener el array asociativo */

    while ($row = mysqli_fetch_array($resultado, MYSQLI_NUM)) {
       
        printf ("%s %s (%s)\n", $row[0], $row[1],$row[3]);
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