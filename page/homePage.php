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
    <script type="text/javascript" src="../js/homePage.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/homePage.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
                        <li class="nav-item"><a href="editProfile.php" class="nav-link text-uppercase font-weight-bold"><img src="../img/edit1.png" /></a></li>
                        <li class="nav-item"><a href="?logoff" class="nav-link text-uppercase font-weight-bold" ><img src="../img/logoff.png"/></a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="mainDivFlex">


        <div class="cardsFilms">
            <img class="card-img-top" src="../img/starwars.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button>Go somewhere</button>
            </div>
        </div>

        
        <div class="cardsFilms">
            <img class="card-img-top" src="../img/starwars.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button>Go somewhere</button>
            </div>
        </div>
        <div class="cardsFilms">
            <img class="card-img-top" src="../img/starwars.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button>Go somewhere</button>
            </div>
        </div>
        <div class="cardsFilms">
            <img class="card-img-top" src="../img/starwars.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button>Go somewhere</button>
            </div>
        </div>
        <div class="cardsFilms">
            <img class="card-img-top" src="../img/starwars.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button>Go somewhere</button>
            </div>
        </div>


    </div>

</body>

</html>