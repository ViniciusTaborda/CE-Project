<?php
    
    include "../php/config.php";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();
    if (!isset($_SESSION['logado'])){
        header("Location: ../login.php");   
        session_destroy();
    }

    if (isset ($_GET['logoff'])){
        session_destroy();
        header("Location: ../login.php");   
    }

?>

<html>
    <head lang="PT-BR">
        <meta charset="UTF-8">

        <title>Edit</title>
        <link rel="icon" href="../img/icon.png">
        <script type="text/javascript" src="../js/jquery.js"></script> 
        <script type="text/javascript" src="../js/editUser.js"></script> 
        <script type="text/javascript" src="../js/sjcl.js"></script> 
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link href="../css/styles.css" rel="stylesheet" id="bootstrap-css">
        <link href="../css/register.css" rel="stylesheet" id="bootstrap-css">
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="icon" href="../img/icon.png">

        
    </head>
    <body>

        <div class="wrapper fadeInDown">

            <div id="formContent">
        
                    <!-- Login Form -->
                <form lang="PT-BR" method="POST" action="../php/editUser.php">
                <input type="hidden" name = "id" value= "<?php echo session_id()?>">
                    <input type="text" minlength="3" maxlength="128" id="input_name" class="form_register" name="input_name" value= "<?php echo $_SESSION['name']?>" readonly >
                    <input type="date" id="input_birthDate" class="form_register1" name="input_birthDate" value= "<?php echo $_SESSION['birth_date']?>" readonly >
                    <input type="text" maxlength="256" id="input_email" class="form_register2" name="input_email" value= "<?php echo $_SESSION['email']?>" readonly >
                    <input type="number" maxlength="16" id="input_cardNumber" class="form_register4" name="input_cardNumber"
                        value= "<?php echo $_SESSION['card_number']?>" >
                    <input type="number" maxlength="3" id="input_securityCode" class="form_register5" name="input_securityCode"
                        value= "<?php echo $_SESSION['security_code']?>">
                    <input type="date" id="input_cardExpirationDate" class="form_register1" name="input_cardExpirationDate"
                        value= "<?php echo $_SESSION['card_expiration_date']?>">
        
                    <input type="text" maxlength="128" id="input_cardholder" class="form_register" name="input_cardholder" value= "<?php echo $_SESSION['cardholder']?>"><br>
                    <input type="radio" id="bCPF" class="fadeIn third" name="CPF_CNPJ" value="1" checked readonly> CPF
                    <input type="radio" id="bCNPJ" class="fadeIn third" name="CPF_CNPJ" value="2" readonly> CNPJ
                    <div id="form_register_user">
                    <input type="text" minlength="11" maxlength="15" id="input_CPF_CNPJ" class="form_register" name="input_CPF_CNPJ" value= "<?php echo $_SESSION['CPF_CNPJ']?>" readonly>
                    
                    </div>
                    <br>
                    <input type="button" id="bBack" class="button_back" value="Voltar">
                    <input type="button" id="bUpdate" class="button_register" value="Editar">
                    
        
                </form>
            </div>
        </div>


    </body>
</html>