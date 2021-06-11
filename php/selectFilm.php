<?php
    
    session_start();

    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM films" ;
    $result = $conn->query($sql); 
    $resultado = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0){ // SE EXISTE FILME CADASTRADO NO BANCO{
        $_SESSION['idFilms'] = $resultado["id"];
        $_SESSION['title'] = $resultado["title"];
        $_SESSION['genre'] = $resultado["genre"]; 
        $_SESSION['year'] = $resultado["year"]; 
        $_SESSION['length'] = $resultado["length"]; 
        $_SESSION['relevance'] = $resultado["relevance"]; 
        $_SESSION['	synopsis'] = $resultado["	synopsis"]; 
        $_SESSION['trailer'] = $resultado["trailer"]; 
        $_SESSION['image'] = $resultado["image"]; 
        }
    
?>