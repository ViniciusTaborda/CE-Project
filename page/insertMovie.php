<?php
    
    session_start();
    include "../php/config.php";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if (!isset($_SESSION['logado'])){
        header("Location: ../login.php");   
        session_destroy();
    }

    if (isset ($_GET['logoff'])){
        session_destroy();
        header("Location: ../login.php");   
    }

?>

<html>
    <head lang="PT-BR">
        <meta charset="UTF-8">

        <link rel="icon" href="../img/icon.png">
        <script type="text/javascript" src="../js/jquery.js"></script> 
        <script type="text/javascript" src="../js/insertMovie.js"></script> 
        <link href="../css/homePage.css" rel="stylesheet">
    </head>
    <body>

    <?php if($_SESSION['is_admin'] == 1){?>
        <div class="div-3">
            <div class="div-cadastroF">
                <div class="div-5">
                <h1> Cadastrar Filme</h1>

                <?php
                    if (isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset ($_SESSION['msg']);
                        
                    }
                ?>
                <form method = "post" action = "" enctype = "multipart/form-data">
                <input type= "text" name= "title" id="title" class="form_register" placeholder = "Título"> <br><br>
                <input type= "text" name= "genre" id="genre" class="form_register3" placeholder = "Gênero"> 
                <input type= "number" name= "year" id="year" class="form_register3" placeholder = "Ano">   
                <input type= "time" name= "length" id="length" class="form_register3" placeholder = "Duração">
                <input type= "text" name= "relevance" id="relevance" class="form_register3" placeholder = "Relevância">
                
                <!-- O segundo valor estará selecionado inicialmente-->
                    <select id="typeVideo" class="form_register">
                    <option type = "text" value="Filme" selected>Filme</option>
                    <option type = "text" value="Série">Série</option>
                    </select>
                <input type= "text" name= "synopsis" id="synopsis" class="form_register2" placeholder = "Sinopse"> <br><br>        
                <input type= "url" name= "trailer" id="trailer" class="form_register" placeholder = "Trailer"> <br><br>        
                <input type= "file" name= "image" id="image" > <br><br>

                <input type = "submit" id = "bSaveMovie" value = "Cadastrar">
                    
                </form>
                </div>
            </div>
        </div>
    <?php } else{ ?>
        <div class="semAcesso"> 
            Usuário sem Permissão de Acesso!!!
            <figure>
                <img src="../img/tristeza.jpg" alt="Minha Figura">
                
            </figure>
        </div>
    <?php } ?>
    </body>
</html>