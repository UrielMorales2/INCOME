$(document).ready(main);
 
var contador = 1;
 
function main () {
	$('.menuVarPEqueño').click(function(){
		if (contador == 1) {
			$('navMenuchico').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('navMenuchico').animate({
				left: '-100%'
			});
		}
	});
 
	// Mostramos y ocultamos submenus
	$('.sub__menu__').click(function(){
		$(this).children('.Children--').slideToggle();
	});
}