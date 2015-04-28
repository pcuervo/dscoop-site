(function($){
	"use strict";
	$(function(){
		//$(".primer_campo").focus();
		activarCampoOtro();
	});

	// Funciones
	function activarCampoOtro() {
		$("input[type=radio]").click(function(){
			if($(this).attr("value") == "otro") {
				$("#otro").show();
				$("#otro input").focus();
			} else {
				$("#otro").hide();
			}
		});
	}


	function getURLParameter(name) {
		return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null}

})(jQuery);