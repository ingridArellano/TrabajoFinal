$(document).ready(function(){
	var altura = $('#contenedor-header').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('#contenedor-header').addClass('menu-fixed');
		} else {
			$('#contenedor-header').removeClass('menu-fixed');
		}
	});

});