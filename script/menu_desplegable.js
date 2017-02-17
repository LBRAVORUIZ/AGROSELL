
$(document).ready(main);
 
 
function main(){
	  contador = 1;
	  $("#menu_categorias").hide();
	$("#boton_menu").click(function(){
		if(contador ==1){
		$('#boton_menu').css("color","#18C459");
		$("#menu_categorias").show();
         contador=0;
		} 
	  else { 
	  	$('#boton_menu').css("color","#FFFFFF");
		$("#menu_categorias").hide();
		contador=1;
	}
});
}

$(document).ready(function(){
	$("#menu_usuario_nav").hide();
	var valor=1;

$("#usuario").on( "click", function() {
		if(valor ==1){
			$('#usuario').css("color","#18C459");
			$("#menu_usuario_nav").show();
			valor=0;
		}
		else
		{   $('#usuario').css("color","#FFFFFF");
			$("#menu_usuario_nav").hide();
			valor=1;
		}
});

});
