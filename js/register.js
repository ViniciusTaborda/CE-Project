$(document).ready(function(){

    registerUser();
    cpf();
    $( "#bRegister_User" ).click(function() {
        alert( "Handler for .click() called." );
      });

});

var registerError = false;
const entry_point = "http://localhost/CE-Project/";

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

function stringToHash(arg_string){
    return sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(arg_string));

}

function clearInputs(){
    $("#input_name").val("");
    $("#input_birthDate").val("");
    $("#input_email").val("");
    $("#hash_password").val("");
    $("#input_cardNumber").val("");
    $("#input_cardNumber").val("");
    $("#input_input_CPF_CNPJ").val("");

}


function saveUsers(){

    let end_point = "php/insertUser.php";

    var input_name = $("#input_name").val();
    var input_birthDate = $("#input_birthDate").val();
    var input_email = $("#input_email").val();
    var hash_password = stringToHash($("#input_password").val());
    var input_cardNumber =  $("#input_cardNumber").val();
    var input_cardExpirationDate = $("#input_cardExpirationDate").val();
    var input_securityCode = $("#input_securityCode").val();
    var input_cardholder = $("#input_cardholder").val();
    var input_CPF_CNPJ = $("#input_CPF_CNPJ").val();

    JSON_variables = {
        name: input_name,
        birth_date: input_birthDate,
        email: input_email,
        password: hash_password,
        card_number: input_cardNumber,
        card_expiration_date: input_cardExpirationDate,
        security_code: input_securityCode,
        cardholder: input_cardholder,
        CPF_CNPJ: input_CPF_CNPJ
        };

    let url = `${entry_point}${end_point}`;

    console.log(url)

    $.post(url, JSON_variables, function(data) {
        
        console.log(data);

    });

}


