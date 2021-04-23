<?php
    
    include "./config.php";

    $email = trim($_POST["email"]);
    $card_number = trim($_POST["card_number"]);
    $card_expiration_date = trim($_POST["card_expiration_date"]);
    $security_code = trim($_POST["security_code"]);
    $cardholder = trim($_POST["cardholder"]);
    //var_dump($_POST);


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }

    $sql = "UPDATE user SET card_number= '$card_number' , card_expiration_date= '$card_expiration_date', 
    security_code= '$security_code', cardholder= '$cardholder' WHERE email = '$email'";
    
    $resultUser = mysqli_query($conn, $sql);

    if(mysqli_insert_id($conn)){
        header("Location: ../page/homePage.php");
    } 

    $conn->close();
    ?>