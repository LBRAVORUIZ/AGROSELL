<?php 
require 'conexion.php';

$email=$_POST['email'];
$password=$_POST['password'];

conexion();
if(validarLogin($email,$password)){

header('../index.html');

}

else{

?>
<script type="text/javascript">
	
alert('Los datos ingresados son incorrectos')

location.href="../html/iniciar_sesion.html"

</script>

<?php
}
 ?>

 ?>