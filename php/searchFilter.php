<?php
    
    session_start();
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $search_field = $_GET['search_field'];

    $sql = "SELECT * FROM films WHERE 
    genre LIKE '%$search_field%' OR
    year LIKE '%$search_field%' OR
    title LIKE '%$search_field%' OR
    relevance LIKE '%$search_field%'" ;

    $result = $conn->query($sql);
    $qnt_linhas = mysqli_num_rows($result);

    if ($qnt_linhas > 0){ 
        echo json_encode($result->fetch_all());
        
    } else {
        echo json_encode('Nenhum filme encontrado');
    }


    $conn->close();
