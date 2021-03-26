<?php
    
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT email, password FROM user";
    $result = $conn->query($sql);

    //json_decode($result); 

    echo json_encode($result->fetch_assoc());
    
    $conn->close();

?>