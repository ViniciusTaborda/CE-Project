<?php
session_start();

    if (isset($_SESSION['logado'])) {
        header("Location: page/homePage.php");
        die();
    }

?>

<head>
    <title>Recovery password</title>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="../img/icon.png">
    <link href="../css/styles.css" rel="stylesheet" id="bootstrap-css">
    <link href="../css/register.css" rel="stylesheet" id="bootstrap-css">
    <script type="text/javascript" src="../js/updatePassword.js"></script>

</head>

<body>


    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
            <i class="fas fa-unlock-alt" style="font-size: 6cm; color: #5fbae9"></i>
            </div>
            <br>
            <br>

            <form>
                <input required type="text" id="input_email" class="form_register" name="email" placeholder="E-mail">
            </form>

            <br>

            <button type="button" id="button_send" class="fadeIn fourth" name="button_send"> <i style="font-size:xx-large ;" class="fas fa-share"></i></button>

        </div>
    </div>

    <!-- Modais -->
    <div class="modal fade" id="modal_email_sent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
     <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Success</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                An e-mail was sent to this e-mail.
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="modal_failed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Error!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div id="modal_failed_body" class="modal-body">
                Error:
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
            </div>
        </div>
        </div>
    </div>

</body>