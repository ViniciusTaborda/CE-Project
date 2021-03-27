<?php
    
    session_start();

    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // VALIDAÇÃO LOGIN
    
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (empty($email) or empty($password)){  // VERIFICA CAMPOS VAZIOS
          $msgLogin = "empty";  //MENSAGEM 
          echo $msgLogin;
      }else{
          $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' " ; // VERIFICA EMAIL E SENHA
          $result = $conn->query($sql); 

          if (mysqli_num_rows($result) > 0){ // SE EXISTE EMAIL E SENHA NO BANCO
            $msgLogin = "OK";
            echo $msgLogin;
           $_SESSION['logado'] = true;
          // header("Location: page/homePage.php");   
              

            }else{
                $msgLogin = "incorrect";
                echo $msgLogin;
            }
        }

    //$result = $conn->query($sql);
    // echo json_encode($result->fetch_all());
    //echo ($email.$password);





?>