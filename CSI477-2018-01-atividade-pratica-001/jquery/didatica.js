

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

function execute(campo,alert){
    

    if($(campo).val() == "1"){
       window.location.replace("didatica-atividade1-2.html");
    }
    else if($(campo).val() == "2"){
       window.location.replace("didatica-atividade1-3.html");
    }
    else if($(campo).val() == "3"){
       window.location.replace("didatica-atividade1-4.html");
    }
    else if($(campo).val() == "4"){
       window.location.replace("home_didatica.html");
    }else{
          $(alert).show();
    }
   
       
        
}

$(document).ready(function(){
 
      $('input[type=radio][name=genero]').change(function () {
        $("#erro-alerta").hide();
      });

     $("#avancar").click(function(){
         if(validarCampo("input[type=radio][name=genero]:checked","#genero-group", "#genero-alerta")){
            execute("input[type=radio][name=genero]:checked","#erro-alerta");
         }


     });
});