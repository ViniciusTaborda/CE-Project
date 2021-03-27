<?php
    
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // VALIDAÇÃO LOGIN
    
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (empty($email) or empty($password)){  // VERIFICA CAMPOS VAZIOS
          $errorLogin = "empty";  //MENSAGEM 
          echo $errorLogin;
      }else{
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' " ; // VERIFICA EMAIL E SENHA
        $result = $conn->query($sql); 

        if (mysqli_num_rows($result) > 0){ // SE EXISTE EMAIL E SENHA NO BANCO
            $errorLogin = "OK";
            echo $errorLogin;
            //header('Location: register.html');            
          }else{
              $errorLogin = "incorrect";
              echo $errorLogin;
          }
        }

    //$result = $conn->query($sql);
    // echo json_encode($result->fetch_all());
    //echo ($email.$password);





?>