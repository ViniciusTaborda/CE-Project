<head lang="PT-BR">
    <meta charset="UTF-8">

    <title>Register</title>
    <link rel="icon" href="../img/icon.png">
    <script type="text/javascript" src="../js/jquery.js"></script> 
    <script type="text/javascript" src="../js/register.js"></script> 
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
            <form lang="PT-BR">
                <input type="text" minlength="3" maxlength="128" id="input_name" class="form_register" name="input_name" placeholder="Name">
                <input type="date" id="input_birthDate" class="form_register1" name="input_birthDate" placeholder="Birth date">
                <input type="text" maxlength="256" id="input_email" class="form_register2" name="input_email" placeholder="E-mail">
                <input type="password" maxlength="8" id="input_password" class="form_register3" name="input_password" placeholder="Password">
                <input type="password" maxlength="8" id="input_passwordConfirm" class="form_register3" name="input_passwordConfirm"
                    placeholder="Confirm password">
                <input type="number" maxlength="16" id="input_cardNumber" class="form_register4" name="input_cardNumber"
                    placeholder="Credit card number">
                <input type="number" maxlength="3" id="input_securityCode" class="form_register5" name="input_securityCode"
                    placeholder="Code">
                <input type="date" id="input_cardExpirationDate" class="form_register1" name="input_cardExpirationDate"
                    placeholder="Credit card expiration">
    
                <input type="text" maxlength="128" id="input_cardholder" class="form_register" name="input_cardholder" placeholder="Cardholder"><br>
                <input type="radio" id="bCPF" class="fadeIn third" name="CPF_CNPJ" value="1" checked> CPF
                <input type="radio" id="bCNPJ" class="fadeIn third" name="CPF_CNPJ" value="2" > CNPJ
                <div id="form_register_user">
                <input type="text" minlength="11" maxlength="15" id="input_CPF_CNPJ" class="form_register" placeholder="CPF" name="input_CPF_CNPJ">
                
                </div>
                <br>
    
                <input type="button" id="bRegister_user" class="button_register" value="Cadastrar">
    
            </form>
    
    
           
            <div id="formFooter">
                <a class="underlineHover" href="../login.php">Already registered? Log in!</a>
            </div>
    
    
          
    
        </div>
    </div>
     <!-- Modais -->
     <div class="modal fade" id="modal_registered_successfully" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
     <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Success</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                User registered! Check your e-mail to finish your account setup.
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