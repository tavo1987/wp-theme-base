jQuery(document).foundation();

jQuery(document).ready(function($){

	//para menu superior de foundation
	$(".top-bar li").has("ul").addClass("has-dropdown");


	/*para agregar un cotenedor a los video*/
	$('.styles-theme .the_content iframe,object,video').wrap('<div class="ed-video"></div>');

	/*para el boton ir arriba */

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});



});