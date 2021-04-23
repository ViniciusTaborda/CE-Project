$(document).ready(function(){
    editUser();
    updateUser();

});

var registerError = false;
const entry_point = "http://localhost/CE-Project/";

function editUser(){
    
    ($("#bEditUser")).click(function(){
        window.location = "editProfile.php";
   });

   ($("#bBack")).click(function(){
     window.location = "homePage.php";
    });
}


function updateUser(){
    
    ($("#bUpdate")).click(function(){
            saveEditUsers();
            

    });
}

function saveEditUsers(){

    let end_point = "php/editUser.php";

    var input_cardNumber =  $("#input_cardNumber").val();
    var input_cardExpirationDate = $("#input_cardExpirationDate").val();
    var input_securityCode = $("#input_securityCode").val();
    var input_cardholder = $("#input_cardholder").val();
    var input_email = $("#input_email").val();

    JSON_variables = {
        email: input_email,
        card_number: input_cardNumber,
        card_expiration_date: input_cardExpirationDate,
        security_code: input_securityCode,
        cardholder: input_cardholder,
        };

    let url = `${entry_point}${end_point}`;

    //console.log(url)    

    $.post(url, JSON_variables, function(data) {
    
    //console.log(data);   
    })

    window.location = "homePage.php";



}

