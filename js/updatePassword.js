$(document).ready(function(){


    $("#button_send").click(function(){

        if($("#input_email").val() != ""){
            updatePassword();
        }else{
            $("#input_email").css("box-shadow", "0px 0px 5px 0px rgba(179,11,11,1)");

        }
    });

});




function updatePassword(){

    const entry_point = "http://localhost/CE-Project/";

    let end_point = "php/emailPassword.php";

    var input_email = $("#input_email").val();

    JSON_variables = {
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

        $("#modal_email_sent").modal('show');
        setTimeout(function(){ window.location = "../login.php"; }, 10000);

    });

}


