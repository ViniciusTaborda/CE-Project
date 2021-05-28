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
    //trim($image = $_POST["image"]);
    trim($typeVideo = $_POST["typeVideo"]);

    $arquivo_nome = $_FILES["file"]["name"];
    $temp = $_FILES["file"]["tmp_name"];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }

    $sql = "INSERT INTO films (title, genre, year, length, relevance, synopsis, trailer, image, typeVideo)
    VALUES ('$title', '$genre', '$year', '$length', '$relevance', '$synopsis', '$trailer', '$arquivo_nome', '$typeVideo')";
    
    $result = $conn->prepare($sql); 
    
    if ($result->execute()){

        $_SESSION['msg'] = "<p style = 'color: green;'> Filme Cadastrado!!! </p>";
        header("Location: insertMovie.php");

  
        $ultimoId = mysqli_insert_id($conn);

        $diretorio = '../img/filmes/' . $ultimoId .'/';
        echo json_encode($ultimoId);
        mkdir($diretorio, 0755);


        if (move_uploaded_file($temp, $diretorio.$arquivo_nome)){
                
            $response_message = array(	"Status"  => 200,
            "Message" => "Success");

            echo json_encode($response_message);
            } else {
            $response_message = array(	"Status"  => 500,
                    "Message" => $conn->error);
            echo json_encode($response_message);
                
        }
    }else{
        $_SESSION['msg'] = "<p style = 'color: red;'> Erro ao Cadastrar Filme!!! </p>";
        header("Location: insertMovie.php");
    }
    
	
    $conn->close();

    ?>