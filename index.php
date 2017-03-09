<!DOCTYPE html>
<html lang="en">
<head>
<meta name="google-site-verification" content="dIk2rhq6I40BzbVd5CIiax7XneW7E3VYCj5CWuxjzVk" />
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>AgroSell</title>
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<script src=": http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <link rel="shortcut icon" sizes="100x100" href="logo/agrosell.png">
  <link rel="stylesheet" type="text/css" href="iconos/fonts/style.css">
  <link rel="stylesheet" type="text/css" href="iconos/menu_categorias/font/flaticon.css">
<script type="text/javascript" src="script/menu_desplegable.js"></script>
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
     <a href="index.php" id="logo_inicio"><img src="logo/logo_agrosell.png" class="logo_agrosell"></a>
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
        <li><a href="html/iniciar_sesion.html"><span class="flaticon-social"></span>Iniciar Sesion</a></li>
        <li><a href="#"><span class="flaticon-tableta"></span>Mis Postulaciones</a></li>
        <li><a href="php/mispedidos.php"><span class="flaticon-transporte"></span>Mis Pedidos</a></li>
        <li><a href="#"><span class="flaticon-anillo"></span>Notificaciones</a></li>
      </ul>
    </nav>
  </header>
  
        </li>
        <li id="li_carrito_compras"><a href="html/pedidos.html" align="center"><span class="carrito-compras"></span></li>
        <li id="li_iniciar_sesion"><a href="html/iniciar_sesion.html" class="myButtoni">Iniciar Sesión</a></li>
      </ul>
    </nav>
  </header>

<div class="div_categorias">
 <div class='form_container '>
<div class="slideContainer">
<h3>LAS MEJORES FRUTAS</h3>

    <?php 

require 'php/conexion.php';

conexion();
$query = " SELECT * FROM  pedido ORDER BY id_pedido DESC  LIMIT 6";
 if ($resultado = $conexion->query($query)) {

    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row()) {
?>

    
<div class='slide'>
<div class="presentacion_productos"><img src="data:image/png;base64,<?php echo  base64_encode($fila[8]);?>"  class="tamaño_imagen">
<div class="div_texto"><?php echo $fila[2]; ?><br><font class="monto"><?php  echo $fila[3]; ?> QQ</font></div>
<div class="div_boton"><a href="html/postulacion.html" class='myButton'>Postular</a></div>
</div>
</div>

<?php
  }

    /* liberar el conjunto de resultados */
    $resultado->close();
}
$conexion->close();

 ?>
    
<!--
<div class="slide">
<div class="presentacion_productos"><img src="data:image/jpg;base64,<?php echo base64_encode($fila[8]);?>" class="tamaño_imagen">
<div class="div_texto">Manzana Roja-Villa Salvador<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="html/postulacion.html" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/papaya.png" class="tamaño_imagen">
<div class="div_texto">Papaya-La Victoria<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="html/postulacion.html" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/palta.png" class="tamaño_imagen">
<div class="div_texto">Palta-San Juan de Lurigancho<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="html/postulacion.html" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/naranja.png" class="tamaño_imagen">
<div class="div_texto">Naranja-Molina<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="html/postulacion.html" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/piña.png" class="tamaño_imagen">
<div class="div_texto">Piña-San Martín<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="html/postulacion.html" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/granadilla.png" class="tamaño_imagen">
<div class="div_texto">Granadilla-Los Olivos<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

</div>
    <button class="left"> &#60;</button>
    <button class="right">&#62;</button>
  </div>



<div class='form_container '>
<div class="slideContainer">

<h3>LAS MEJORES VERDURAS</h3>
<div class="slide">
<div class="presentacion_productos"><img src="productos/brocoli.png" class="tamaño_imagen">
<div class="div_texto">Brocoli-San Luis<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/betarraga.png" class="tamaño_imagen">
<div class="div_texto">Betarraga-Surco<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/aji.png" class="tamaño_imagen">
<div class="div_texto">Ají-Ventanilla<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/rabanito.png" class="tamaño_imagen">
<div class="div_texto">Rabanito-Ancón<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/berenjena.png" class="tamaño_imagen">
<div class="div_texto">Berenjena-Ate<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/cebolla.png" class="tamaño_imagen">
<div class="div_texto">Cebolla-Cercado <br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

   </div>
    <button class="left"> &#60; </button>
    <button class="right">&#62;</button>
  </div>



<div class='form_container '>
    <div class="slideContainer">
   <h3>LOS MEJORES TUBERCULOS</h3>
  
<div class="slide">
<div class="presentacion_productos"><img src="productos/camote.png" class="tamaño_imagen">
<div class="div_texto">Camote-La Victoria<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/yuca.png" class="tamaño_imagen">
<div class="div_texto">Yuca-La Victoria<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>
<div class="presentacion_productos"><img src="productos/oca.png" class="tamaño_imagen">
<div class="div_texto">Oca-Los Olivos<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/olluco.png" class="tamaño_imagen">
<div class="div_texto">Olluco-Comas<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/yacon.png" class="tamaño_imagen">
<div class="div_texto">Yacón-Villa María del Triunfo<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

<div class="slide">
<div class="presentacion_productos"><img src="productos/cebolla.png" class="tamaño_imagen">
<div class="div_texto">Cebolla-Los Olivos<br><font class="monto">20 QQ</font></div>
<div class="div_boton"><a href="#" class="myButton">Postular</a></div>
</div>
</div>

    </div>
    <button class="left"> &#60; </button>
    <button class="right">&#62;</button>
  </div>


   <div class='form_container '>
    <div class="slideContainer">
   <h3>LOS MEJORES CEREALES</h3>
        <div class="slide">
          <div class="presentacion_productos"><img src="productos/arveja.png" class="tamaño_imagen">
          <div class="div_texto">Arveja-Cercado<br><font class="monto">20 QQ</font></div>
          <div class="div_boton"><a href="#" class="myButton">Postular</a></div>
         </div>
        </div>
          <div class="slide" >
          <div class="presentacion_productos"><img src="productos/arroz.png" class="tamaño_imagen">
          <div class="div_texto">Arroz-Lurín<br><font class="monto">20 QQ</font></div>
          <div class="div_boton"><a href="#" class="myButton">Postular</a></div>
          </div>         
        </div>

        <div class="slide" >
               <div class="presentacion_productos"><img src="productos/cebada.png" class="tamaño_imagen">
               <div class="div_texto">Cebada-Chorrillos<br><font class="monto">20 QQ</font></div>
               <div class="div_boton"><a href="#" class="myButton">Postular</a></div>
               </div>         
        </div>
        <div class="slide" >
            <div class="presentacion_productos"><img src="productos/trigo.jpg" class="tamaño_imagen">
            <div class="div_texto">Trigo-Magdalena<br><font class="monto">20 QQ</font></div>
            <div class="div_boton"><a href="#" class="myButton">Postular</a></div>
            </div>            
        </div>
      <div class="slide" >
       <div class="presentacion_productos"><img src="productos/avena.png" class="tamaño_imagen">
       <div class="div_texto">Avena-La Victoria<br><font class="monto">20 QQ</font></div>
       <div class="div_boton"><a href="#" class="myButton">Postular</a></div>
       </div>
      </div> 
    </div>
    <button class="left"> &#60; </button>
    <button class="right">&#62;</button>
  </div>

<div class='form_container '>
    <div class="slideContainer">
    <h3>LAS MEJORES SEMILLAS</h3>
        <div class="slide" data-background=''>
          <div class="presentacion_productos"><img src="productos/cafe.png" class="tamaño_imagen">
          <div class="div_texto">Café-San Luis<br><font class="monto">20 QQ</font></div>
          <div class="div_boton"><a href="#" class="myButton">Postular</a></div>
          </div>
        </div>
        <div class="slide" data-background=''>
           <div class="presentacion_productos"><img src="productos/cacao.png" class="tamaño_imagen">
           <div class="div_texto">Cacao-Cercado<br><font class="monto">20 QQ</font></div>
           <div class="div_boton"><a href="php/conexion.php" class="myButton">Postular</a></div>
           </div>             
        </div>

        <div class="slide" data-background=''>
                        
        </div>
        <div class="slide" data-background=''>
                        
        </div>
        -->
    </div>
    <button class="left"> &#60; </button>
    <button class="right">&#62;</button>
  </div>
</div>

<footer class="clase-general">
<div class="pie_pagina_suscribirse">¡SUSCRÍBETE A NUESTRO NEWSLETTER!
<input class="pie_pagina_input_suscribirse" type="email" name="email" placeholder="Suscríbite con tu email">
<a href="#" class="pie_pagina_boton_suscribirse">Suscribirse</a>
</div>
<div class="pie_pagina_forma_pago_div"><img class="pie_pagina_forma_pago_imagen_efectivo" src="iconos/forma de pago/efectivo.png">&nbsp;<img class="pie_pagina_forma_pago_imagen_visa" src="iconos/forma de pago/visa.png">&nbsp;<img class="pie_pagina_forma_pago_imagen_mastercard" src="iconos/forma de pago/mastercard.png"></div>
</footer>
</body>
</html>
