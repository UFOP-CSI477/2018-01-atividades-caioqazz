
function validarCampo(campo, grupo, alerta) {
        console.log($(campo).val());
        if($(campo).val() ===  undefined || $(campo).val().length == 0 ){
             $(alerta).show();
             $(grupo).addClass("has-error");
             $(campo).focus();
             return false;
           }

             $(grupo).removeClass("has-error");
             $(alerta).hide();
             return true;
 }

	function teste(campo, alert_suc, alert_fail){

		if($(campo).val()== "V"){
			 $(alert_suc).show();
			 return true;
		}

		 $(alert_fail).show();
			return false;
	}


$(document).ready(function(){

	 $('input[type=radio][name=img1]').change(function () {
        $("#imagem1-alert").hide();
        $("#imagem1-fail").hide();
      });

 	$('input[type=radio][name=img2]').change(function () {
        $("#imagem2-alert").hide();
        $("#imagem2-fail").hide();
      });

 	$('input[type=radio][name=img3]').change(function () {
        $("#imagem3-alert").hide();
        $("#imagem3-fail").hide();
      });

 	$('input[type=radio][name=img4]').change(function () {
        $("#imagem4-alert").hide();
        $("#imagem4-fail").hide();
      });

  $("#button").click(function(){
  		if(validarCampo("input[type=radio][name=img1]:checked","#imagem1-group", "#imagem1-alert") &&
  			validarCampo("input[type=radio][name=img2]:checked","#imagem2-group", "#imagem2-alert") &&
  			validarCampo("input[type=radio][name=img3]:checked","#imagem3-group", "#imagem3-alert") &&
  			validarCampo("input[type=radio][name=img4]:checked","#imagem4-group", "#imagem4-alert") ){

  			var a1 = teste("input[type=radio][name=img1]:checked","#imagem1-success", "#imagem1-fail");
  			var a2 =teste("input[type=radio][name=img2]:checked","#imagem2-success", "#imagem2-fail");
  			var a3 =teste("input[type=radio][name=img3]:checked","#imagem3-success", "#imagem3-fail");
  			var a4 =teste("input[type=radio][name=img4]:checked","#imagem4-success", "#imagem4-fail");

        if(a1 == true && a2 == true && a3 == true && a4 == true)

          window.location.replace("didatica-home.html");
        
  		}


	 });
});