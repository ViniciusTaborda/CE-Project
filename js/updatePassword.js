$(document).ready(function(){



});

const entry_point = "http://localhost/CE-Project/";

function updatePassword(){

    let end_point = "php/updatePassword.php";

    var input_email = $("#input_email").val();
    var hash_password = stringToHash($("#input_password").val());


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

    }).done(function() {

        $("#modal_failed").replaceWith( `<div id="modal_failed_body" class="modal-body"> Erro: ${data}</div>`);
        $("#modal_failed").modal('show');

    });

}


