var arquivo;
var formData;

$(document).ready(function(){
    saveFilm();

});

var registerError = false;
const entry_point = "http://localhost/CE-Project/";

function saveFilm(){

    ($("#bSaveMovie")).click(function(){
        saveMovei();
       // window.location = "insertMovie.php";

   });
}


function saveMovei(){


    var myForm = document.getElementById('newMovie');
    formData = new FormData(myForm);
//    console.log(formData.get('image'));

    var title = $("#title").val();
    var genre = $("#genre").val();
    var year = $("#year").val();
    var length = $("#length").val();
    var relevance = $("#relevance").val();
    var synopsis = $("#synopsis").val();
    var trailer = $("#trailer").val();
    var image = $("#file").val();
    var typeVideo = $("#typeVideo").val();

    let end_point = "php/registerMovie.php";

    let url = `${entry_point}${end_point}`;

    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function(retorno){
            alert(retorno)
        }
    });

    return false;
 
}

