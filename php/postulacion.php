
 <?php 
require 'conexion.php';

$id_pedido=$_POST['valor'];

session_start();
$query= "SELECT * FROM pedido WHERE  id_pedido='$id_pedido'";
conexion();
 $resultado=$conexion->query($query);
 $fila=$resultado->fetch_array(MYSQLI_BOTH);

 ?>
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
  <li>Descripción:<?php echo $fila['descripcion_pedido'];?></li>
</ul>
</div>
<div class="parte_especificaciones_div">EMPRESA
  <ul class="parte_especificaciones_contenido">

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
<font class="contacto_superior_monto"> <?php echo $fila['cantidad_pedido'];?> QQ</font>
<br>
<font class="contacto_superior_precio">(S/ <?php echo $fila['precio_pedido'];?> /QQ)</font>
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

 <?php
$resultado->close();
$conexion->close();
   ?>