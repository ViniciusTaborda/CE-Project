<?php
    
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    echo json_encode($result->fetch_assoc());
    
    $conn->close();

?>