$(document).ready(function(){

    registerUser();
    cpf();
    cnpj();

});

var registerError = false;

function registerUser(){

    $("#bregisterUser").click(function(){

        registerError = false
        validateRegister("input_name");
        validateRegister("input_birthDate");
        validateRegister("input_email");
        validateRegister("input_password");
        validateRegister("input_passwordConfirm");
        validateRegister("input_cardNumber");
        validateRegister("input_CPF");
        validateRegister("input_CNPJ");
        validatePassword();

        if (registerError == false){
            alert("Salvo");
            limparCampos();
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

    $("#bCPF").click(function(){

        $("#form_register_user").html("");

        var content = "";

        content += '<input type="number" id="input_CPF" class="form_register" name="CPF" placeholder="CPF">';

        $("#form_register_user").append(content)

        });  

}

function cnpj(){

    $("#bCNPJ").click(function(){

        $("#form_register_user").html("");

        var content = "";

        content += '<input type="number" id="input_CNPJ" class="form_register" name="CNPJ" placeholder="CNPJ">';

        $("#form_register_user").append(content)

        

    });  

}

function validatePassword(){

    var password = $("#input_password").val();
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
    $("#input_password").val("");
    $("#input_cardNumber").val("");
    $("#input_cardNumber").val("");
    $("#input_CPF").val("");
    $("#input_CNPJ").val("");


}

