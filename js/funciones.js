$(function(){
	 var altoSeccion = $(".seccion").outerHeight();
	 var tiempo = 2000;
	 
	 $("#btnQuienesSomos").click(
		function(e){
			$("html, body").animate({scrollTop:(0)},tiempo);
		}
	 );
	 
	 $("#btnImagenes").click(
		function(e){
			$("html, body").animate({scrollTop:(altoSeccion)},tiempo);
		}
	 );
	 
	 $("#btnEquipo").click(
		function(e){
			$("html, body").animate({scrollTop:(altoSeccion*2)},tiempo);
		}
	 );
	 
	 $("#btnVideos").click(
		function(e){
			$("html, body").animate({scrollTop:(altoSeccion*3)},tiempo);
		}
	 );
});

$(window).scroll(function(){
	var mover = $(this).scrollTop();
	
	$("#imagenes").css({
		"backgroundPosition" : "0 -" + mover/2 + "px"
	});
	
	$("#logotipo").css({
		"transform": "translate(0px, -"+mover/10 +"px)"
	});
	
	$("#imagenGrande").css({
		"transform": "translate(0px, -"+mover/3 +"%)"
	});
});