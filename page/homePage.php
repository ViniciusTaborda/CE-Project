<?php
session_start();

include "../php/config.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if (!isset($_SESSION['logado'])) {
    header("Location: ../login.php");
    session_destroy();
}

if (isset($_GET['logoff'])) {
    session_destroy();
    header("Location: ../login.php");
}

?>

<html>

<head lang="PT-BR">
    <meta charset="UTF-8">

    <title>Av Films</title>
    <link rel="icon" href="../img/icon.png">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/selectMovie.js"></script>
    
    <!--<script type="text/javascript" src="../js/favoritos.js"></script>-->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="../css/homePage.css" rel="stylesheet">
    <link rel="icon" href="../img/icon.png">
    
</head>

<body>

    <header class="header">

        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Av Films</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="homePage.php" class="nav-link text-uppercase font-weight-bold"><i class="fas fa-home"></i></a></li>
                        <li class="nav-item"><a href="editProfile.php" class="nav-link text-uppercase font-weight-bold"><i class="far fa-sun"></i></a></li>
                        <?php if($_SESSION['is_admin'] == 1){?>
                        <li class="nav-item"><a href="insertMovie.php" class="nav-link text-uppercase font-weight-bold"><i class="far fa-lightbulb"></i></i></a></li>
                        <?php } ?>
                        <li class="nav-item"><a href="favorites.php" class="nav-link text-uppercase font-weight-bold"><i class="far fa-star"></i></i></a></li>
                        <li class="nav-item"><a href="?logoff" class="nav-link text-uppercase font-weight-bold"><i class="fas fa-power-off"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="div-1">

        <div class="mainDivFlex">
        </div>

        <br><br><br>

        <div class="card-Films">
       
        </div>

        <!-- Modal -->
        <div class="modal fade" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>

                    </div>

                </div>
            </div>
        </div>



              <!-- Modal -->
            <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body" id="modalBody">
                    
                </div>

                </div>
            </div>
            </div>




</body>

</html>