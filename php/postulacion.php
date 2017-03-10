
 <?php 
require 'conexion.php';

$id_pedido=$_POST['valor'];

session_start();
$query= "SELECT * FROM pedido WHERE  id_pedido='$id_pedido'";
conexion();
 $resultado=$conexion->query($query);
 $fila=$resultado->fetch_array(MYSQLI_BOTH);
 echo $fila[0];
 ?>
