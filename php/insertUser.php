<?php
    
    include "./config.php";

    echo var_dump($_POST);

    $conn = new mysqli($servername, $username, $password, $dbname);

    $name = $_POST["name"];
    $birth_date = $_POST["birth_date"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $card_number = $_POST["card_number"];
    $card_expiration_date = $_POST["card_expiration_date"];
    $security_code = $_POST["security_code"];
    $cardholder = $_POST["cardholder"];
    $CPF_CNPJ = $_POST["CPF_CNPJ"];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }

    $sql = "INSERT INTO user (name, birth_date, email, password, card_number, card_expiration_date, security_code, cardholder, CPF_CNPJ)
    VALUES ('$name', '$birth_date', '$email', '$password', '$card_number', '$card_expiration_date', '$security_code', '$cardholder', '$CPF_CNPJ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    
    $conn->close();

    ?>