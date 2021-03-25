<?php
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }

    trim($id = $_POST["id"]);

    $sql = "INSERT INTO user (is_valid)
    VALUES (1) 
    WHERE ID == '$id'";

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