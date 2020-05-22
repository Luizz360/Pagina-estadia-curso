$(document).ready(function(){
	var altura = $('.M').offset().top;
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.M').addClass('menu-fixed');
		} else {
			$('.M').removeClass('menu-fixed');
		}
	});
});