
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
        //console.log(result);

        $(".card-Films").html("");
        for (var i = 0; i < result.length; i++) { 
            
            var base = result[i][8].replace("C:fakepath", "");
            var conteudo = "";
            conteudo += `<div class="div-card">
                            <div class="divImagem">
                                <img src="../img/filmes/${base}">
                            </div>
                            <div class="div-titulo"><br>
                                <h7>${result[i][1]}</h7>
                            </div>
                            <div class="div-descricao" ><b> ${result[i][2]} - ${result[i][3]} - ${result[i][4]}</b> <br>
                            <div class="div-descricao" ><b> ${result[i][5]}</b>
                            <a href="#" <i id = "colorInfo" class="fas fa-info-circle"></i> </a>
                            <button type="button" id="button_video" class="button_video" data-toggle="modal" data-src="${result[i][7]}" data-target="#video_modal">
                            <i id = "colorPlay" class="fab fa-youtube"></i>  </button>`

                conteudo += `<i id = "${result[i][0]}"class="far fa-star star addFavoritos" name=id" "></i>
                                </div>
                                <div class="div-rodape"></div>`;

            
     /*       if (result[i][10] == 0){
                conteudo += `<i id = "${result[i][0]}"class="far fa-star star addFavoritos name=id" "></i>
                                </div>
                                <div class="div-rodape"></div>`;
            }else{
                conteudo += `<i id = "${result[i][0]}"class="far fa-star star colorStar addFavoritos name=id" "></i>
                </div>
                <div class="div-rodape"></div>`;
            }*/
            
            $(".card-Films").prepend(conteudo);

                            
        }

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
        });
     });

    
}

function selectFavoritos(){
            let end_point = "./php/insertFavorites.php";
            let url = `${entry_point}${end_point}`;
            $.ajax({
                url: url,
                method: 'GET',
                dataType: 'json'
            }).done(function(resultFavorites){
                for (var i = 0; i < resultFavorites.length; i++) { 
                    arrayCarrinho.push(resultFavorites[i]);
                }
                //console.log(resultFavorites);
            });
            return arrayCarrinho;
}




