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

    let end_point = "php/registerMovie.php";

    var title = $("#title").val();
    var genre = $("#genre").val();
    var year = $("#year").val();
    var length = $("#length").val();
    var relevance = $("#relevance").val();
    var synopsis = $("#synopsis").val();
    var trailer = $("#trailer").val();
    var image = $("#image").val();
    var typeVideo = $("#typeVideo").val();

    JSON_variables = {
        title: title,
        genre: genre,
        year: year,
        length: length,
        relevance: relevance,
        synopsis: synopsis,
        trailer: trailer,
        image: image,
        typeVideo:typeVideo
        };

    let url = `${entry_point}${end_point}`;

  /*  $.post(url, JSON_variables, function(data) {
        console.log(data);
    })
*/
    $.ajax({
        url: url,
        method: 'POST',
        data: JSON_variables,
        dataType: 'json'


    }).done(function(result){
        console.log(result);
        });
 
}

