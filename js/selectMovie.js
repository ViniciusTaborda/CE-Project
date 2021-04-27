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
        console.log(result);

        $(".card-Films").html("");
     for (var i = 0; i < result.length; i++){ //meu array esta trazendo um tamanho de 3736 (????)
 
         var conteudo = "";
         conteudo += '<div class="div-card">';
         conteudo += '<div class="divImagem">';

         var base = result[i][8].replace("C:fakepath","");
         

         conteudo += '<img src="../img/filmes/' + base    +  '">';
         conteudo += '</div>';
         conteudo += '<div class="div-titulo"><br>';
         conteudo += '<h7>'+ result[i][1] + '</h7>';
         conteudo += '</div>';
         conteudo += '<div class="div-descricao" ><b> ' + result[i][2] + ' - '  + result[i][3] +  ' - ' + result[i][4] + ' </b>';
         conteudo += '<div class="div-descricao" ><b>' + result[i][5] + ' </b>';
         conteudo += '</div>';
         
         conteudo += '<div class="div-rodape">'; 
 
         
         $(".card-Films").prepend(conteudo);
     }
    });
}