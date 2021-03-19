$(document).ready(function(){

    registerUser();
    cpf();
    

});

var registerError = false;

function registerUser(){

    $("#bregisterUser").click(function(){

        registerError = false
        validateRegister("input_name");
        validateRegister("input_birthDate");
        validateRegister("input_email");
        validateRegister("hash_password");
        validateRegister("input_passwordConfirm");
        validateRegister("input_cardNumber");
        validateRegister("input_securityCode");
        validateRegister("input_cardExpirationDate");
        validateRegister("input_cardholder");
        validateRegister("input_CPF_CNPJ");
        validatePassword();

        if (registerError == false){
            alert("Salvo");
            clearInputs();
        }else{
            alert("Preencher campos Obrigatorios")
        }
   

});
}

function validateRegister(registerInput){
    var campo = ($("#" + registerInput).val());
    
    if (campo == ""){
        $("#" + registerInput).addClass("obrig_input");
        registerError = true;    
    }else {
        $("#" + registerInput).removeClass("obrig_input");
}
}

function cpf(){
    $('[name="CPF_CNPJ"]').click(function() {
        $('#input_CPF_CNPJ').attr(
        $(this).val() === '1' ? 
        { placeholder:"CPF", maxlength:"11" } :
        { placeholder:"CNPJ", maxlength:"14" } 
        );
    });
}



function validatePassword(){

    var password = $("#hash_password").val();
    var confirmPassword = $("#input_passwordConfirm").val();

    if (password != ""){
        if (password != confirmPassword){
            $("#input_passwordConfirm").addClass("obrig_input");
            registerError = true;
        }
    }

}

function clearInputs(){
    $("#input_name").val("");
    $("#input_birthDate").val("");
    $("#input_email").val("");
    $("#hash_password").val("");
    $("#input_cardNumber").val("");
    $("#input_cardNumber").val("");
    $("#input_input_CPF_CNPJ").val("");
    ;


}

