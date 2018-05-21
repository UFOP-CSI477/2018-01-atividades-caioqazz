  


function validarCampo(campo, grupo, alerta) {
        


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
function validarSelectBox(value ,campo, grupo, alerta) {
        
     

        if($(value).val() == "0"){
             $(alerta).show();
             $(grupo).addClass("has-error");
             $(campo).focus();
             return false;
           }

             $(grupo).removeClass("has-error");
             $(alerta).hide();
             return true;
 }




$(document).ready(function(){
    console.log( $( "input[type=radio][name=genero]:checked" ).val());


     $("button[name='cadastrar']").click(function(){
        console.log( "merda");
         if(validarCampo("input[name='nome']","#nome-group", "#nome-alerta") &&
            validarCampo("input[name='datanasc']","#datanasc-group", "#datanasc-alerta") &&
            validarCampo("input[name='telefone']","#telefone-group", "#telefone-alerta") &&
            validarCampo("input[name='cel']","#cel-group", "#cel-alerta") &&
            validarCampo("input[name='CPF']","#CPF-group", "#CPF-alerta") &&
            validarCampo("input[name='id']","#id-group", "#id-alerta") &&
            validarCampo("input[name='rua']","#rua-group", "#rua-alerta") &&
            validarCampo("input[name='bairro']","#bairro-group", "#bairro-alerta") &&
            validarSelectBox("select#cidade option:checked","input[name='cidade']","#cidade-group", "#cidade-alerta") &&
            validarSelectBox("select#estado option:checked","input[name='estado']","#estado-group", "#estado-alerta") &&
            validarCampo("input[type=radio][name=genero]:checked","#genero-group", "#genero-alerta") &&
            validarCampo("input[type=radio][name=ec]:checked","#ec-group", "#ec-alerta")
          ){

         }


     });
});