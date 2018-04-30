


function validarCampo(campo, grupo, alerta) {
        

	var x = parseFloat($(campo).val());
	console.log(x);
        if($(campo).val() ===  undefined || $(campo).val().length == 0 || isNaN(x)){
             $(alerta).show();
             $(grupo).addClass("has-error");
             $(campo).focus();
             return false;
           }

             $(grupo).removeClass("has-error");
             $(alerta).hide();
             
             return true;

 }

 function exibeInfo(valor){

 	console.log(valor);
 	if(valor<3.5){
 		$('#valor b').text("Geralmente não sentido, mas gravado");
 	}else if(valor>= 3.5 && valor<5.4){
		$('#valor b').text("Às vezes sentido, mas raramente causa danos");
 	}else if(valor>=5.5 && valor<6){
 		$('#valor b').text("No maximo causa pequenos danos a predios bem construidos, mas pode danificar seriamente casa mal construidas em regiões proximas");
 	}else if(valor>=6.1 && valor<6.9){
 		$('#valor b').text("Pode ser destrutivo em areas em torno de até 100km do epicentro");
 	}else if(valor>=7.0 && valor<7.9){
 		$('#valor b').text("Grande terremoto. Pode causar serios danos numa grande faixa");
 	}else if(valor>=8){
	$('#valor b').text("Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros");
 	}
 	return true;
 }




$(document).ready(function() {
	
	

	$("#calculo").click(function(event) {
		
		if(validarCampo("#A","#amp-group","#amp-alert")&&
			validarCampo("#P","#pressao-group","#pressao-alert")&&
			validarCampo("#S","#super-group","#super-alert")
			){

			var A = parseFloat($("#A").val());
			var P = parseFloat($("#P").val());
			var S = parseFloat($("#S").val());
			var R = $("#res").val(Math.log10(A)+ 3* Math.log10(8*(S-P)) - 2,92);
			
			exibeInfo(R.val());
		}
	});
});