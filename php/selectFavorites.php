<?php
    
    session_start();
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $idUser = $_SESSION['idUser'];

    $sql = "SELECT * 
    FROM films
    INNER JOIN favorites on films.id = favorites.idFilm
    WHERE (idUser = '$idUser')" ;

    $result = $conn->query($sql);
    $qnt_linhas = mysqli_num_rows($result);

    if ($qnt_linhas > 0){ 
        echo json_encode($result->fetch_all(PDO::FETCH_ASSOC));
        
    } else {
        echo json_encode('Nenhum filme encontrado');
    }


    $conn->close();

?>