


function validarCampo(campo, grupo, alerta) {



    if ($(campo).val() === undefined || $(campo).val().length == 0) {
        $(alerta).show();
        $(grupo).addClass("has-error");
        $(campo).focus();
        return false;
    }

    $(grupo).removeClass("has-error");
    $(alerta).hide();
    console.log("foi true");
    return true;
}
function validarSelectBox(value, campo, grupo, alerta) {



    if ($(value).val() == "0") {
        $(alerta).show();
        $(grupo).addClass("has-error");
        $(campo).focus();
        return false;
    }

    $(grupo).removeClass("has-error");
    $(alerta).hide();
    return true;
}




$(document).ready(function () {

    $("#login").click(function () {

        if (validarCampo("input[name='name']", "#name-group", "#name-alert") &&
                validarCampo("input[name='password']", "#password-group", "#password-alert")
                ) {

        } else {
            event.preventDefault();
        }
    });
    $("#create_procedures").click(function () {

        if (validarCampo("input[name='name']", "#name-group", "#name-alert") &&
               alidarCampo("input[name='price']", "#price-group", "#price-alert")
                ) {

        } else {
            event.preventDefault();
        }
    });

    $("#addtest").click(function () {

        if (validarSelectBox("select#procedure_id option:checked", "input[name='procedure_id']", "#procedure_id-group", "#procedure_id-alert") &&
                validarCampo("input[name='date']", "#date-group", "#date-alert")
                ) {

        } else {
            event.preventDefault();
        }
    });

    $("#update_price").click(function () {

        if (validarCampo("input[name='price']", "#price-group", "#price-alert")
                ) {

        } else {
            event.preventDefault();
        }
    });

    $("#cadastrar").click(function () {
        if (validarCampo("input[name='name']", "#name-group", "#name-alert") &&
                validarCampo("input[name='email']", "#email-group", "#email-alert") &&
                validarCampo("input[name='remember_token']", "#remember_token-group", "#remember_token-alert") &&
                validarCampo("input[name='password']", "#password-group", "#password-alert")
                ) {


        } else {
            event.preventDefault();
        }


    });


});