<?php

session_start();
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $idFilm = $_SESSION['idFilms'];
    $idUser = session_id();


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }

    $sql = "INSERT INTO favorites (idFilm, idUser)
    VALUES ('$idFilm','$idUser')";
    
    $result = $conn->prepare($sql); 
    echo json_encode($result->fetch_all());


?>