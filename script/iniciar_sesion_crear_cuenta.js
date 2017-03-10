	function(){

         $('#tabla_iniciar_sesion').show(); //muestro mediante id
		 $('#tabla_crear_cuenta').hide();
         $('#tabla_crear_cuenta_agricultor').hide();
         $('#tabla_crear_cuenta_comerciante').hide();
         $('#tabla_crear_cuenta_agricultor').hide();
         $('#tabla_crear_cuenta_comerciante').hide();
         $('#boton_iniciar_sesion').css("background","#1FF538");

		$("#boton_iniciar_sesion").on( "click", function() {
			$('#tabla_iniciar_sesion').show(); //muestro mediante id
			$('#tabla_crear_cuenta').hide();
			$('#boton_iniciar_sesion').css("background","#1FF538");
			$('#boton_crear_cuenta').css("background","transparent");
		    $('#tabla_crear_cuenta_agricultor').hide();
            $('#tabla_crear_cuenta_comerciante').hide();

		 });

		   $("#boton_crear_cuenta").on( "click", function() {
	     	$('#tabla_iniciar_sesion').hide(); //muestro mediante id
			$('#tabla_crear_cuenta').show();
			$('#boton_iniciar_sesion').css("background","transparent");
			$('#boton_crear_cuenta').css("background","#1FF538");
			$('#tabla_crear_cuenta_agricultor').hide();
            $('#tabla_crear_cuenta_comerciante').hide();
        
         $(".agricultor").on( "click", function() {
		 $('#tabla_iniciar_sesion').hide(); //muestro mediante id
		 $('#tabla_crear_cuenta').show();
         $('#tabla_crear_cuenta_agricultor').show();
         $('#tabla_crear_cuenta_comerciante').hide();
         $('.agricultor').css("color","#2FC84C");
         $('.empresa').css("color","#232323");
		 });


		$(".empresa").on( "click", function() {
	     $('#tabla_iniciar_sesion').hide(); //muestro mediante id
		 $('#tabla_crear_cuenta').show();
         $('#tabla_crear_cuenta_agricultor').hide();
         $('#tabla_crear_cuenta_comerciante').show();
         $('.empresa').css("color","#2FC84C");
          $('.agricultor').css("color","#232323");
      
         
		});  
         
		});

        
      


	}

	