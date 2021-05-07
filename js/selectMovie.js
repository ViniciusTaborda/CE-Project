var favoritos = [];

$(document).ready(function(){
    select();
    
});

var registerError = false;
const entry_point = "http://localhost/CE-Project/";

function select(){
    let end_point = "./php/selectMovie.php";
    let url = `${entry_point}${end_point}`;
    $.ajax({
        url: url,
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
       // console.log(result);

        $(".card-Films").html("");
     for (var i = 0; i < result.length; i++){ 
 
         var conteudo = "";
         conteudo += '<div class="div-card">';
         conteudo += '<div class="divImagem">';

         var base = result[i][8].replace("C:fakepath","");
         

         conteudo += '<img src="../img/filmes/' + base    +  '">';
         conteudo += '</div>';
         conteudo += '<div class="div-titulo"><br>';
         conteudo += '<h7>'+ result[i][1] + '</h7>';
         conteudo += '</div>';
         conteudo += '<div class="div-descricao" ><b> ' + result[i][2] + ' - '  + result[i][3] +  ' - ' + result[i][4] + ' </b> <br>';
         conteudo += '<div class="div-descricao" ><b>' + result[i][5] + ' </b>';
         conteudo += '<did><a href="#" <i id = "colorInfo" class="fas fa-info-circle"></i> </a></did>'
         conteudo += '<did><a href="#" <i id = "colorPlay" class="fab fa-youtube"></i></i></a></did>'

         if (1 == result[i][0]){
            conteudo += '<did><a href="#" <i id = "colorStar1"class="far fa-star estrela addFavoritos"></i></a></did>'
            }   
            else{
                conteudo += '<did><a href="#" <i id = "colorStar"class="far fa-star estrela addFavoritos" ></i></a></did>'
            }

         conteudo += '</div>';
         
         conteudo += '<div class="div-rodape">'; 
 
         
         $(".card-Films").prepend(conteudo);
     }

     ($(".estrela")).click(function(){
        alert("oi");
        var id = $(this).attr("addFavoritos");
      
        let end_point = "./php/insertFavorites.php";
        let url = `${entry_point}${end_point}`;

        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json'
        }).done(function(resultFavorites){
            console.log(resultFavorites);
    
        })
        
    });
    


    });
   
}



    
