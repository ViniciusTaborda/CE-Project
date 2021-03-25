<?php
    include "./config.php";

    echo var_dump($_POST);

    $conn = new mysqli($servername, $username, $password, $dbname);

    trim($name = $_POST["name"]);
    trim($birth_date = $_POST["birth_date"]);
    trim($email = $_POST["email"]);
    trim($password = $_POST["password"]);
    trim($card_number = $_POST["card_number"]);
    trim($card_expiration_date = $_POST["card_expiration_date"]);
    trim($security_code = $_POST["security_code"]);
    trim($cardholder = $_POST["cardholder"]);
    trim($CPF_CNPJ = $_POST["CPF_CNPJ"]);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }

    $sql = "INSERT INTO user (name, birth_date, email, password, card_number, card_expiration_date, security_code, cardholder, CPF_CNPJ)
    VALUES ('$name', '$birth_date', '$email', '$password', '$card_number', '$card_expiration_date', '$security_code', '$cardholder', '$CPF_CNPJ')";

	if ($conn->query($sql) === TRUE) {

		$response_message = array(	"Status"  => 200,
									"Message" => "Success");

		echo $response_message;
	} else {
		$response_message = array(	"Status"  => 500,
									"Message" => $conn->error);
		echo $response_message;
  	}

    $conn->close();

    ?>