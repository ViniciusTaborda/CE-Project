
$(document).ready(function(){
    registerUser();
    cpf();
    authLogin();

});

var registerError = false;
const entry_point = "http://localhost/CE-Project/";

function registerUser(){

    ($("#bRegister_user")).click(function(){

        registerError = false
        validateRegister("input_name");
        validateRegister("input_birthDate");
        validateRegister("input_email");
        validateRegister("input_password");
        validateRegister("input_passwordConfirm");
        validateRegister("input_cardNumber");
        validateRegister("input_securityCode");
        validateRegister("input_cardExpirationDate");
        validateRegister("input_cardholder");
        validateRegister("input_CPF_CNPJ");
        validatePassword();

        if (registerError == false){
            saveUsers();
            $("#modal_registered_successfully").modal('show');
            sendEmailConfirm();
            clearInputs();

        }else{
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

    var password = $("#input_password").val();
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
    $("#input_password").val("");
    $("#input_confirmPassword").val("");
    $("#input_cardNumber").val("");
    $("#input_cardExpirationDate").val("");
    $("#input_securityCode").val("");
    $("#input_cardholder").val("");
    $("#input_CPF_CNPJ").val("");
}

function sendEmailConfirm(){

    let end_point = "./php/sendEmail.php";

    var input_name = $("#input_name").val();
    var input_email = $("#input_email").val();

    JSON_variables = {
        name: input_name,
        email: input_email
        };

    let url = `${entry_point}${end_point}`;

    console.log(url)

    $.post(url, JSON_variables, function(data) {
        
        console.log(data);

    })
    .fail(function() {

        $("#modal_failed").replaceWith( `<div id="modal_failed_body" class="modal-body"> Erro: ${data}</div>`);
        $("#modal_failed").modal('show');

    });

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

    })
    .fail(function() {

        $("#modal_failed").replaceWith( `<div id="modal_failed_body" class="modal-body"> Erro: ${data}</div>`);
        $("#modal_failed").modal('show');

    });

}

function authLogin(){

    $("#button_logIn").click(function(){
       let end_point = "php/authUser.php";

        var input_email = ($("#input_login").val());
        var hash_password = stringToHash($("#input_password_login").val());
    
        JSON_variables = {
            email: input_email,
            password: hash_password,
            };
    
        let url = `${entry_point}${end_point}`;
        
        $.post(url, JSON_variables, function(data) {
 
        if (data === "empty"){
            $("#alertLogin").html("");

            var conteudo = "";
            conteudo +=  '<div class="alert alert-danger" role="alert">';
            conteudo += 'Preencher todos os campos!';
            conteudo += ' </div>'

            $("#alertLogin").append(conteudo)

        }if (data === "incorrect"){
            $("#alertLogin").html("");

            var conteudo = "";
            conteudo +=  '<div class="alert alert-danger" role="alert">';
            conteudo += 'Usuario ou Senha Invalida';
            conteudo += ' </div>'

            $("#alertLogin").append(conteudo)

        }if (data === "OK"){
            
            window.location.href = "page/homePage.php";
         }

       });
 
    });
      
}