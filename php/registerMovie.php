<?php

    session_start();
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    trim($title = $_POST["title"]);
    trim($genre = $_POST["genre"]);
    trim($year = $_POST["year"]);
    trim($length = $_POST["length"]);
    trim($relevance = $_POST["relevance"]);
    trim($synopsis = $_POST["synopsis"]);
    trim($trailer = $_POST["trailer"]);
    trim($image = $_POST["image"]);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }

    $sql = "INSERT INTO films (title, genre, year, length, relevance, synopsis, trailer, image)
    VALUES ('$title', '$genre', '$year', '$length', '$relevance', '$synopsis', '$trailer', '$image')";
    
    $result = $conn->prepare($sql); 
    
    if ($result->execute()){

        $_SESSION['msg'] = "<p style = 'color: green;'> Filme Cadastrado!!! </p>";
        header("Location: insertMovie.php");

/*        $ultimoId = $conn->lastInsertId();
        
        $diretorio = './img/' . $ultimoId.'/';
        echo json_encode($ultimoId);

        mkdir($diretorio, 0755);
        move_uploaded_file($_FILES['image'], $diretorio);
*/
    }else{
        $_SESSION['msg'] = "<p style = 'color: red;'> Erro ao Cadastrar Filme!!! </p>";
        header("Location: insertMovie.php");
    }
    
	
    $conn->close();

    ?>