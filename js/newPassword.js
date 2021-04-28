$(document).ready(function(){


    $("#button_confirm").click(function(){

        if(isConfirmed()){
            updatePassword();

        }else{
            passwordsDiffer();
        }

    });

});

const entry_point = "http://localhost/CE-Project/";

function passwordsDiffer(){

    $("#input_password").css("box-shadow", "0px 0px 5px 0px rgba(179,11,11,1)");
    $("#input_confirm_password").css("box-shadow", "0px 0px 5px 0px rgba(179,11,11,1)");


}

function passwordsNotDiffer(){

    $("#input_confirm_password").css("background-color", "yellow");
    $("#input_password").css("background-color", "yellow");

}

function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

function isConfirmed(){
    return $("#input_confirm_password").val() == $("#input_password").val();
}

function stringToHash(arg_string){
    return sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(arg_string));
}

function updatePassword(){

    let end_point = "php/updatePassword.php";

    var hash_password = stringToHash($("#input_password").val());

    JSON_variables = {
        password: hash_password,
        email: getUrlParameter('email')
        };

    let url = `${entry_point}${end_point}`;

    console.log(url)

    $.post(url, JSON_variables, function(data) {
        
        console.log(data);

    })
    .fail(function() {

        $("#modal_failed").replaceWith( `<div id="modal_failed_body" class="modal-body"> Erro: ${data}</div>`);
        $("#modal_failed").modal('show');

    }).done(function() {

        $("#modal_email_sent").modal('show');

    });

}


