
$(document).ready(function () {
    select();
    
    
    

    // Gets the video src from the data-src on each button

    var $videoSrc;
    // $('.button_video').click(function () {
    //     $videoSrc = $(this).data("src");
    //     console.log($videoSrc);

    // });

    $(document).on("click", "#button_video", function(){
        $videoSrc = $(this).data("src");
        console.log($videoSrc);
    });

    // when the modal is opened autoplay it  
    $('#video_modal').on('shown.bs.modal', function (e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?controls=0autoplay=1&amp;modestbranding=1&amp;showinfo=0");

    })

    // stop playing the youtube video when I close the modal
    $('#video_modal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    })


    // mais informações filme
    
    $(document).on("click", "#button_info", function(){
        $infoFilme = $(this).data("info");

        $("#modalId").modal('show');
        $("#modalBody").html($infoFilme);
    });



});

var registerError = false;
const entry_point = "http://localhost/CE-Project/";

function select() {
    let end_point = "./php/selectMovie.php";
    let url = `${entry_point}${end_point}`;
    $.ajax({
        url: url,
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result);

        $(".card-Films").html("");
        for (var i = 0; i < result.length; i++) { 
            
            var base = result[i][8].replace("C:fakepath", "");
            var conteudo = "";
            conteudo += `<div class="div-card">
                            <div class="divImagem">
                                <img src="../img/filmes/${base}">
                            </div>
                            <div class="div-titulo">
                                <h7>${result[i][1]}</h7>
                            </div>
                            <div class="div-descricao" ><b> ${result[i][2]} - ${result[i][3]} - ${result[i][4]}</b> <br>
                            
                            <div class="fav-star"><b> ${result[i][5]}</b></div>
                            
                            <div class="fav-star"><button type="button" id="button_info" data-toggle="modal"data-info="${result[i][6]}" data-target="#info_modal">
                            <i id = "colorInfo" class="fas fa-info-circle"></i> </button></button ></div>                                

                            <div class="fav-star"><button type="button" id="button_video" class="button_video" data-toggle="modal" data-src="${result[i][7]}" data-target="#video_modal">
                            <i id = "colorPlay" class="fab fa-youtube"></i></button> </div>`

            conteudo += `<div id="${result[i][0]}" class="fav-star"> <button type="button" class="button_star">
                            <i id = "${result[i][0]}"class="far fa-star star name=id" "></i></button></div>
                            </div>
                            <div class="div-rodape"></div>`;



                            $(".card-Films").prepend(conteudo);
                            selectFavoritos(result[i][0]);
        }
        favoritar();


        //$(".div-descricao").find("#35").html('<div id="${result[i][0]}"<i class="far fa-star colorStar star name=id" "></i></div>');

     });
     
}

function selectFavoritos(id){
            let end_point = "./php/selectFavorites.php";
            let url = `${entry_point}${end_point}`;
            
            $.ajax({
                url: url,
                method: 'GET',
                dataType: 'json'
            }).done(function(resultFavorites){
                for (var i = 0; i < resultFavorites.length; i++) { 
                    if (id == resultFavorites[i][0]){
                        $(".div-descricao").find("#" + id).html('<i id = "' + id + '"class="far fa-star colorStar star name=id" "></i>');
                        
                    }
                }

                
            });

}

function favoritar(){

    ($(".star")).click(function(){
        var id = this.id;
        let end_point = "./php/insertFavorites.php";
        let url = `${entry_point}${end_point}`;
        
        JSON_variables = {
            idFilm: id,
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: JSON_variables,
            dataType: 'json',

        }).done(function(result){
            console.log(result);
            });
            window.location.reload();

    });

}


