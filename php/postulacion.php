<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>AgroSell-Postulación</title>
  <link rel="stylesheet" type="text/css" href="../css/general.css">
  <script src=": http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <link rel="shortcut icon" sizes="100x100" href="../logo/agrosell.png">
  <link rel="stylesheet" type="text/css" href="../iconos/menu_categorias/font/flaticon.css">
<script type="text/javascript" src="../script/menu_desplegable.js"></script>
 <script>
              
              function enviar_postulacion()
              {
                document.formulario_datos.submit()
              }


  </script>
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
        <li><a href="../php/mispedidos.php"><span class="flaticon-transporte"></span>Mis Pedidos</a></li>
        <li><a href="#"><span class="flaticon-anillo"></span>Notificaciones</a></li>
      </ul>
    </nav>
  </header>
  
        </li>
        <li id="li_carrito_compras"><a href="pedidos.html" align="center"><span class="carrito-compras"></span></li>
        <li id="li_iniciar_sesion"><a href="iniciar_sesion.html" class="myButtoni">Iniciar Sesión</a></li>
      </ul>
    </nav>
  </header>

 <?php 
require 'conexion.php';

$id_pedido=$_POST['codigo'];

session_start();
$query= "SELECT * FROM pedido WHERE  id_pedido='$id_pedido'";
conexion();
 $resultado=$conexion->query($query);
 $fila=$resultado->fetch_array(MYSQLI_BOTH);

 ?>
<div class="div_categorias">
<div class="parte_superior">
<div class="parte_superior_titulo"><?php echo $fila['producto_pedido'];?>
<br>
<a  href="javascript:enviar_postulacion()" class="parte_superior_texto_direccion"><span class="icon-location"></span><font><?php echo $fila['direccion_pedido'];?></font></a>
</div>
<div class="parte_superior_iconos">
<a href="" class="parte_superior_iconos_facebook"><span class="icon-facebook"></span></a>
<a href="" class="parte_superior_iconos_twitter"><span class="icon-twitter"></span></a>
<a href="" class="parte_superior_iconos_youtobe"><span class="icon-youtube"></span></a>
<a href="" class="parte_superior_iconos_instagram"><span class="icon-instagram"></span></a>
</div>
</div>
<hr>

<div class="parte_inferior">

<!--IMAGEN-->
<div class="parte_imagen"><img src="data:image/png;base64,<?php echo  base64_encode($fila['imagen_pedido']);?>" class="imagen_tamaño_pag2"></div>

<!--ESPECIFICACIONES-->
<div class="parte_especificaciones">
<div class="parte_especificaciones_div">PRODUCTO
<ul class="parte_especificaciones_contenido">
<li>Calidad:<?php echo $fila['calidad_pedido'];?></li>
  <li>Descripción:<?php echo $fila['producto_descripcion'];?></li>
</ul>
</div>
<div class="parte_especificaciones_div">EMPRESA
  <ul class="parte_especificaciones_contenido">
  <?php
$resultado->close();
$conexion->close();
   ?>
  <li>Razon Social:AgroSell </li>
  <li>Ruc:20122356789</li>
  <li>Ubicación:Panamerica Sur km 16-Surco</li>
  <li>Rubro:Comercio-Agrícola</li>
  <li>Telefono:983118757</li>
  <li>email:agrosell@gmail.com</li>
  <li>Facebook:AgrosellPeru</li>
</ul>
</div>
</div>

<!--CONTACTO-->

<div class="parte_contacto">
<!--CONTACTO-FROMULARIO-SUPERIOR-->
<div class="contacto_superior">
<div class="contacto_superior_div">
<font class="contacto_superior_monto">200 QQ</font>
<br>
<font class="contacto_superior_precio">(S/250.00 /QQ)</font>
</div>
<div class="contacto_superior_div">
<a href="#" class="myButton_pag2">POSTULAR AHORA</a>
</div>
</div>

<hr>
<!--CONTACTO-FROMULARIO-MEDIO-->

<div class="contacto_medio">

<form name="formulario_datos" method="POST" action="AgroSell.php">
<div class="contacto_medio_div_formulario">
<table border="0" cellpadding="0" cellspacing="0">
   <tr>
    <th>Dirección</th>
    <th>:<input  class="contacto_medio_div_formulario_input" type="text" name="direccion" required></th>
  </tr>
<tr>
    <th>Foto Producto</th>
    <th>:<input class="contacto_medio_div_formulario_input contacto_medio_div_formulario_input_foto" type="file" name="foto_producto" required></th>
  </tr>
</table>
</div>
</form>
<hr>
<div class="contacto_medio_div_recojo">
<br>
<font>Recogido por:</font>
<br>
<a href="" class="contacto_medio_recojo_texto">LINEA SAC</a>

<div class="ec-stars-wrapper">
	<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
	<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
	<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
	<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
	<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
</div>
</div>

<div class="contacto_medio_div_recojo">
<div class="contacto_medio_div_recojo_num_dias">
<font>1</font>
</div>
<div class="contacto_medio_div_recojo_texto_dias">
<font>dias</font>
</div>
</div>
<br>
<br>
<div class="contacto_inferior">
<a href="" class="contacto_inferior_link"><span class="icon-phone contacto_inferior_link_icono_llamar"></span><div class="contacto_inferior_link_div">Asesoria Telefónica</div></a>
<br>
<a href="" class="contacto_inferior_link"><span class="icon-lock contacto_inferior_link_icono_candado"></span><div class="contacto_inferior_link_div">Negociaciones Seguras</div></a>    
</div>
</div>


</div>
</div>
</div>

<footer class="clase-general">
<div class="pie_pagina_suscribirse">¡SUSCRÍBETE A NUESTRO NEWSLETTER!
<input class="pie_pagina_input_suscribirse" type="email" name="email" placeholder="Suscríbite con tu email">
<a href="#" class="pie_pagina_boton_suscribirse">Suscribirse</a>
</div>
<div class="pie_pagina_forma_pago_div"><img class="pie_pagina_forma_pago_imagen_efectivo" src="../iconos/forma de pago/efectivo.png">&nbsp;<img class="pie_pagina_forma_pago_imagen_visa" src="../iconos/forma de pago/visa.png">&nbsp;<img class="pie_pagina_forma_pago_imagen_mastercard" src="../iconos/forma de pago/mastercard.png"></div>
</footer>

</body>
</html>
