<?php 
require 'conexion.php';

$email=$_POST['email'];
$password=$_POST['password'];
echo $email;
echo $password;


conexion();
if(validarLogin($idusuario,$contraseña)){

header('location:principal.php');

}

else{

?>
<script type="text/javascript">
	
alert('Los datos ingresados son incorrectos')

location.href="INTRANET.html"

</script>

<?php
}
 ?>