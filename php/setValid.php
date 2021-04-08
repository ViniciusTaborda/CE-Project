<?php
include "./config.php";

$email = trim($_GET["email"]);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit;
}


$sql = "UPDATE user SET is_valid = 1 WHERE email = '$email'";

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
<html>

<head>
    <head>
        <title>confirm account</title>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="icon" href="../img/icon.png">
        <link href="../css/styles.css" rel="stylesheet" id="bootstrap-css">
        <link href="../css/register.css" rel="stylesheet" id="bootstrap-css">
    </head>
</head>

<body>

    <!-- Modais -->
    <div class="modal fade" id="modal_account_confirmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div style="text-align: center" class="modal-body">
                    Account confirmed! You will be redirected to the home page of our site...
                    <br>
                    <br>
                    <br>
                    <br>
                    <i style="font-size: 35;" class="fas fa-spinner fa-pulse"></i>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $("#modal_account_confirmed").modal('show');

        var delay = 5000;
        var url = '../page/homePage.php';
        setTimeout(function() {
            window.location = url;
        }, delay);

    });
</script>