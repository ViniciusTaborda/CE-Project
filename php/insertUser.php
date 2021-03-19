<?php
    
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $name = $_POST['input_name'];
    $birth_date = $_POST['input_birthDate'];
    $email = $_POST['input_email'];
    $password = $_POST['hash_password'];
    $card_number = $_POST['input_cardNumber'];
    $card_expiration_date = $_POST['input_cardExpirationDate'];
    $security_code = $_POST['input_securityCode'];
    $cardholder = $_POST['input_cardholder'];
    $CPF_CNPJ = $_POST['CPF_CNPJ'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }

    $sql = "INSERT INTO users (name, birth_date, email, password, card_number, card_expiration_date, security_code, cardholder, CPF_CNPJ)
    VALUES (`$name`, `$birth_date`, `$email`, `$password`, `$card_number`, `$card_expiration_date`, `$security_code`, `$cardholder`, `$CPF_CNPJ`)";

    $result = $conn->query($sql);

    echo json_encode($result->fetch_assoc());
    
    $conn->close();

    ?>