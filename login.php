<?php
    session_start();

    if (isset($_SESSION['logado'])){
        header("Location: page/homePage.php");   
        die();
    }

?>
<head>
    <title>Login</title>
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="./img/icon.png">
    <link href="./css/styles.css" rel="stylesheet" id="bootstrap-css">
    <link href="./css/register.css" rel="stylesheet" id="bootstrap-css">

    <script type="text/javascript" src="js/register.js"></script> 
    <script type="text/javascript" src="js/sjcl.js"></script> 

</head>

<body>


  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
  
      <!-- Icon -->
      <div class="fadeIn first">
          <i  style="font-size: 6cm; color: #5fbae9; " class="fa fa-user-circle" aria-hidden="true"> </i>
      </div>
  
      <!-- Login Form -->
      <form >
        <input required type="text" id="input_login" class="form_register" name="login" placeholder="Login">
        <input required type="password" id="input_password_login" class="form_register" name="password" placeholder="Password">
        <input type="button" id="button_logIn" class="fadeIn fourth" value="Log In" name="bLogin">
        <div id = "alertLogin">
        <!-- <div class="alert alert-danger" role="alert">
            deu ruim
          </div> -->
        </div>
      </form>
  
      <div id="formFooter">
        <a class="underlineHover" href="./page/register.php"> Don't have an account? Register!</a>
      </div>
  
    </div>
  </div>

</body>

