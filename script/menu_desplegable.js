
$(document).ready(main);
 
var contador = 1;
 
function main(){
	  contador = 1;
	$("#boton_menu").click(function(){
		if(contador ==1){
			$("#menu_categorias").animate({
				left: '0%'
			});
			contador = 0;

		} 
		else {
			$("#menu_categorias").animate({
				left: '-25%'
			});
			contador = 1;
		}
 
	});

};


	