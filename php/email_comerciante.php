<?php 
require 'conexion.php';
$email = $_POST['email'];
conexion();
$query = "SELECT email_usuario FROM usuario WHERE email_usuario='$email'";
 if ($resultado = $conexion->query($query)) {
      echo "ya existe este email";
       echo "<script>
       $(document).ready(function(){
      $('#email_comerciante').css({'color':'#C31515'});
  });
</script>";
 }

$conexion->close();
    

 ?>