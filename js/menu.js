$(document).ready(main);

var altura = $('#menu').offset().top;
var anchura = $(window).width();

	
	if (anchura>800) {
		$(window).on('scroll', function(){
		if ($(window).scrollTop()>altura) {
			$('#menu').addClass('menu-fixed');
			$('#most').addClass('mostfixed');
		}else{
			$('#menu').removeClass('menu-fixed');
			$('#most').removeClass('mostfixed');
		}
	});
	}

var contador = 1;

function main(){
	$('.menu_bar').click(function(){
		//$('nav').toggle();

		if (contador == 1) {
			$('nav').animate({
				left: '1%',
				
			});
			contador = 0;
		}else{
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
			
		}

	});
	$('.clear').click(function(){
		//$('nav').toggle();

		if (contador == 1) {
			$('nav').animate({
				left: '1%',
				
			});
			contador = 0;
		}else{
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
			
		}

	});
	/*ESTE CODIGO ES ELABOARO 100% DE LA AUTORÍA DE ERIC JOSE MARTINEZ MUENTES PAGINAS OFFICIALES FB 
                facebook.com/ejmm19
                mobiliariosfamarsa.com*/
                /*ESTE CODIGO ES ELABOARO 100% DE LA AUTORÍA DE ERIC JOSE MARTINEZ MUENTES PAGINAS OFFICIALES FB 
                facebook.com/ejmm19
                mobiliariosfamarsa.com*/
                /*ESTE CODIGO ES ELABOARO 100% DE LA AUTORÍA DE ERIC JOSE MARTINEZ MUENTES PAGINAS OFFICIALES FB 
                facebook.com/ejmm19
                mobiliariosfamarsa.com*/
};
