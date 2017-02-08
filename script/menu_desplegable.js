
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

      if($(window).width()<=1100)
      {


       if($(window).width()<=1100 && $(window).width()>800)

       {

      $("#menu_categorias").animate({
				left: '-30%'
			});
			contador = 1;	
      }

      if($(window).width()<=800 && $(window).width()>700)
      {
      $("#menu_categorias").animate({
				left: '-40%'
			});
			contador = 1;	
      }

       if($(window).width()<=700 && $(window).width()>600)
       {
      $("#menu_categorias").animate({
				left: '-45%'
			});
			contador = 1;	
      } 


      if($(window).width()<=600 && $(window).width()>500)
      {
      $("#menu_categorias").animate({
				left: '-50%'
			});
			contador = 1;

			}	

	  if($(window).width()<=500 && $(window).width()>450)
      {
      $("#menu_categorias").animate({
				left: '-70%'
			});
			contador = 1;

			}	
	
	if($(window).width()<=400 && $(window).width()>300 )
      {
      $("#menu_categorias").animate({
				left: '-80%'
			});
			contador = 1;

			}	

	if($(window).width()<=300 )
      {
      $("#menu_categorias").animate({
				left: '-90%'
			});
			contador = 1;

			}	
      }

      else{

      	$("#menu_categorias").animate({
				left: '-25%'
			});
			contador = 1;

      }
}		
		


	});

};


	
