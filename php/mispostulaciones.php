<!DOCTYPE html>
<html lang="en">
<head>
<meta name="google-site-verification" content="dIk2rhq6I40BzbVd5CIiax7XneW7E3VYCj5CWuxjzVk" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>AgroSell</title>
  <link rel="stylesheet" type="text/css" href="../css/general.css">
  <link rel="stylesheet" type="text/css" href="../css/pedido.css">
  <script src=": http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <link rel="shortcut icon" sizes="100x100" href="../logo/agrosell.png">
  <link rel="stylesheet" type="text/css" href="../iconos/menu_categorias/font/flaticon.css">
<script type="text/javascript" src="../script/menu_desplegable.js"></script>
<script type="application/ld+json">

{"@context":"http://agrosell.pe.hu","@type":"Plataforma Web","url":"http://agrosell.pe.hu","contactPoint":[{"@type":"ContactPoint","telephone":"983118757","contactType":"customer service"}]}</script>
</head>
<body>
<header id="menu_superior">
      <nav id="nav_menu_superior">
      <ul>
      <li>
    <a  id="boton_menu" class="bt-menu"><span  class="icono_menu" ></span></a>
 <header id="menu_categorias">
   <nav id="menu_categorias_nav">
      <ul>
       <li><a href="#"><span class="flaticon-compras-2"></span>Solo Hoy</a></li>
        <li><a href="#"><span class="flaticon-fruta-4 "></span>Frutas</a></li>
        <li><a href="#"><span class="flaticon-zanahoria"></span>Verduras</a></li>
        <li><a href="#"><span class="flaticon-patatas"></span>Tuberculos</a></li>
        <li><a href="#"><span class="flaticon-comida-6"></span>Cereales</a></li>
        <li><a href="#"><span class="flaticon-cafe-1"></span>Semillas</a></li>
        <li><a href="#"><span class="flaticon-transporte"></span>Transpostistas Oficiales</a></li>
        <li><a href="#"><span class="flaticon-ordenador"></span>Lista de Precios</a></li>
        <li><a href="#"><span class="flaticon-hoja"></span>Plagas y Tratamiento</a></li>
        <li><a href="#"><span class="flaticon-signos"></span>Mas</a></li>
      </ul>
    </nav>
  </header>
      </li>
        <li id="li_logo">
     <a href="../index.php" id="logo_inicio"><img src="../logo/logo_agrosell.png" class="logo_agrosell"></a>
        </li>
        <li id="li_buscar">
        <div class="buscar_div">
        <input type="search" class="caja_buscar" name="buscar productos"  placeholder="Buscar productos"><a href="#" align="center" class="myButton_buscar"><span class=" icono_buscar"></span></a>
        </div>
        </li>
        <li id="li_usuario"><a align="center" id="usuario"><span class="usuario"></span></a>
   
    <header id="menu_usuario">
   <nav id="menu_usuario_nav">
      <ul>
        <li><a href="../html/iniciar_sesion.html"><span class="flaticon-social"></span>Iniciar Sesion</a></li>
        <li><a href="#"><span class="flaticon-tableta"></span>Mis Postulaciones</a></li>
        <li><a href="#"><span class="flaticon-transporte"></span>Mis Pedidos</a></li>
        <li><a href="#"><span class="flaticon-anillo"></span>Notificaciones</a></li>
      </ul>
    </nav>
  </header>
  
        </li>
        <li id="li_carrito_compras"><a href="../html/pedidos.html" align="center"><span class="carrito-compras"></span></li>
        <li id="li_iniciar_sesion"><a href="../html/iniciar_sesion.html" class="myButtoni">Iniciar Sesión</a></li>
      </ul>
    </nav>
  </header>

 <table  id="tabla_pedido" border="1" cellpadding="0" cellspacing="0">
<tbody>
    <tr id="fila_principal_pedido">
      <td>Producto</td>
      <td>Cantidad</td>
      <td>Calidad</td>
      <td>Precio</td>
      <td>Descripción</td>
      <td>Dirección</td>
    </tr>
<?php 

require 'conexion.php';
session_start();

if (empty($_SESSION['id_usuario'])) {
  header("location:../html/iniciar_sesion.html");
}
else{
  
$usuario=$_SESSION['id_usuario'];
$pedido=$_SESSION['id_pedido'];

conexion();
$query = "SELECT id_pedido FROM postulacion WHERE id_usuario='$usuario'";
 if ($resultado = $conexion->query($query)) {
$fila = $resultado->fetch_array(MYSQL_BOTH);
 $query = "SELECT * FROM pedido WHERE id_usuario='$fila['id_pedido']'";
$resultado2 = $conexion->query($query)
    /* obtener el array de objetos */
    while ($fila2 = $resultado2->fetch_array(MYSQL_BOTH)) {

      echo "<tr>
      <td>&nbsp;&nbsp;$fila2[2]</td>
      <td>&nbsp;&nbsp;$fila2[4]</td>
      <td>&nbsp;&nbsp;$fila2[5]</td>
      <td>&nbsp;&nbsp;$fila2[6]</td>
      <td>&nbsp;&nbsp;$fila2[7]</td>
      <td>&nbsp;&nbsp;$fila2[8]</td>
    </tr>";
    }

    /* liberar el conjunto de resultados */
    $resultado->close();
}
$conexion->close();
}


 ?>
    
  </tbody>
  </table>

<footer class="clase-general">
<div class="pie_pagina_suscribirse">¡SUSCRÍBETE A NUESTRO NEWSLETTER!
<input class="pie_pagina_input_suscribirse" type="email" name="email" placeholder="Suscríbite con tu email">
<a href="#" class="pie_pagina_boton_suscribirse">Suscribirse</a>
</div>
<div class="pie_pagina_forma_pago_div"><img class="pie_pagina_forma_pago_imagen_efectivo" src="../iconos/forma de pago/efectivo.png">&nbsp;<img class="pie_pagina_forma_pago_imagen_visa" src="../iconos/forma de pago/visa.png">&nbsp;<img class="pie_pagina_forma_pago_imagen_mastercard" src="../iconos/forma de pago/mastercard.png"></div>
</footer>
</body>
</html>
