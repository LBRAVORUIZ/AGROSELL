
<?php
$conexion=null;
function conexion ()
{
global $conexion;

$conexión = mysqli_connect("mysql.hostinger.es", "u807939866_bravo", "agrosell2017", "u807939866_ags");

if (!$conexión) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexión) . PHP_EOL;

mysqli_close($conexión);
return $conexión;
}
?>



