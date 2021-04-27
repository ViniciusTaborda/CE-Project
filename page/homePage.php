<?php
session_start();
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
                        <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Portfolio</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                        <li class="nav-item"><a href="editProfile.php" class="nav-link text-uppercase font-weight-bold"><i class="far fa-sun"></i></a></li>
                        <li class="nav-item"><a href="?logoff" class="nav-link text-uppercase font-weight-bold" ><i class="fas fa-power-off"></i></a></li>
                        <li class="nav-item"><a href="insertMovie.php" class="nav-link text-uppercase font-weight-bold" ><i class="far fa-lightbulb"></i></i></a></li>

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
        
    </div>

</body>

</html>