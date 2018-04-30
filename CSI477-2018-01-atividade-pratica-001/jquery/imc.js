

function validarCampo(campo,group,alert){

	if($(campo).val() === undefined || $(campo).val().length == 0 || isNaN(parseFloat($(campo).val())) ){
		$(alert).show();
		$(group).addClass("has-error");
		$(campo).focus();
		return false;
	}

	$(group).removeClass("has-error");
	$(alert).hide();
	return true;
}

function executeImc(a, p){
	//var a = parseFloat($(altura).val());
	//var p = parseFloat($(peso).val());
	
	return (p/(a*a));
}

function exibeInfo(valor){

 	console.log(valor);
 	if(valor<18.5){
 		$('#val b').text("Subnutrição");
 	}else if(valor>= 18.5 && valor< 25){
		$('#val b').text("Peso Saudavel");
 	}else if(valor>=25 && valor< 30){
 		$('#val b').text("Sobrepeso");
 	}else if(valor>=30 && valor<35){
 		$('#val b').text("Obesidade grau 1");
 	}else if(valor>=35 && valor<40){
 		$('#val b').text("Obesidade grau 2");
 	}else if(valor>=40){
	$('#val b').text("Obesidade grau 3");
 	}
 	return true;
 }

function pesoIdeal(altura, peso){
	
	if(peso>=25.0){
		
		var i = peso;
		console.log(i);
		var imc = parseFloat(executeImc(altura,i));
		console.log(imc);
		
		for (i = peso; imc >25.0; i=i-0.1) {
		 imc = parseFloat(executeImc(altura,i));
  		}
	
		console.log(i);

	}
	else if(peso<=18.5){

	}
  	
return true;
	
}

function calcFaixa(altura, peso,imc, faixa){
	var p= peso;
	if(imc >= faixa){

		for(p = peso; imc >= faixa ; p = p-0.1){
			imc = executeImc(altura, p);
		}

	}
	else if(imc < faixa){
			for(p= peso; imc < faixa ; p = p+0.1){
			imc = executeImc(altura, p);
		}
	}

	return p;

}

function execute(altura, peso){
	var imc = executeImc(altura, peso);
	$("#res").val(imc);
	exibeInfo(imc);

	console.log(altura,peso);
	var maximc = calcFaixa(altura, peso, imc,25);
	console.log(maximc);
	var minimc = calcFaixa(altura, peso, imc,18.5);
	console.log(minimc);
	$('#valor b').text("Seu peso ideal é entre ("+ maximc.toFixed(1) +"kg - "+ minimc.toFixed(1)+ "kg)");
}

$(document).ready(function() {
	
	$("#button").click(function(event) {
		if(validarCampo("#peso","#peso-group","#peso-alert")&&
			validarCampo("#altura","#altura-group","#altura-alert")){
		execute(parseFloat($("#altura").val()),parseFloat($("#peso").val()));
			//executeImc(parseFloat($("#altura").val()),parseFloat($("#peso").val()));
		}
	});
	

});