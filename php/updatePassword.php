<?php
include "./config.php";

$email = trim($_POST["email"]);
$password = trim($_POST["password"]);

$conn = new mysqli($servername, $username, "", $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit;
}


$sql = "UPDATE user SET password = '$password' WHERE email = '$email'";

if ($conn->query($sql) === TRUE) {

    $response_message = array(
        "Status"  => 200,
        "Message" => "Success"
    );

    //echo json_encode($response_message);
} else {
    $response_message = array(
        "Status"  => 500,
        "Message" => $conn->error
    );

    //echo json_encode($response_message);
}

$conn->close();

?>