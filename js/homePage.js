$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});

$( document ).ready(function() {



});

function selectFiltering() {
    var search_field = $("#search_field").val();
    

    let end_point = "./php/searchFilter.php";
    let url = `${entry_point}${end_point}?search_field=${search_field}`;
    $.ajax({
        url: url,
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log('result' + result);

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
        }
     });
     
}