
$(document).ready(function () {
    selectFavorites();
    selectFavoritesSerie();

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

function selectFavorites() {
    
    let end_point = "./php/selectFavoritesMovie.php";
    let url = `${entry_point}${end_point}`;
    $.ajax({
        url: url,
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result);

        listarFavoritos("movie", result);
        favoritar();
     });

    
}


function selectFavoritesSerie() {
    
    let end_point = "./php/selectFavoritesSerie.php";
    let url = `${entry_point}${end_point}`;
    $.ajax({
        url: url,
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
    
        listarFavoritos("serie", result);
        favoritar();

     });

    
}

function listarFavoritos(filme, bancoFilme){
    $(".card-Favorites-"+filme).html("");
    for (var i = 0; i < bancoFilme.length; i++) { 
        
        var base = bancoFilme[i][8].replace("C:fakepath", "");
        var conteudo = "";
        conteudo += `<div class="div-card">
                        <div class="divImagem">
                            <img src="../img/filmes/${base}">
                        </div>
                        <div class="div-titulo"><br>
                            <h7>${bancoFilme[i][1]}</h7>
                        </div>
                        <div class="div-descricao" ><b> ${bancoFilme[i][2]} - ${bancoFilme[i][3]} - ${bancoFilme[i][4]}</b> <br>
                        <div class="fav-star"><b> ${bancoFilme[i][5]}</b></div>
                        
                        <div class="fav-star"><button type="button" id="button_info" data-toggle="modal"data-info="${bancoFilme[i][6]}" data-target="#info_modal">
                        <i id = "colorInfo" class="fas fa-info-circle"></i> </button></button ></div>                                

                        <div class="fav-star"><button type="button" id="button_video" class="button_video" data-toggle="modal" data-src="${bancoFilme[i][7]}" data-target="#video_modal">
                        <i id = "colorPlay" class="fab fa-youtube"></i></button> </div>`

            conteudo += `<div id="${bancoFilme[i][0]}" class="fav-star"> <i id = "${bancoFilme[i][0]}"class="far fa-star colorStar star name=id" "></i></div>
                        </div>
                        <div class="div-rodape"></div>`;
        
        $(".card-Favorites-"+filme).prepend(conteudo);
    
    }
}

function favoritar(){

    ($(".colorStar")).click(function(){
        var id = this.id;
        let end_point = "./php/insertFavorites.php";
        let url = `${entry_point}${end_point}`;
        console.log("delete movie")
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
    });

}





