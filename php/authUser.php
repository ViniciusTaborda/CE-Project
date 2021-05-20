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
          $resultado = mysqli_fetch_assoc($result);

          if (mysqli_num_rows($result) > 0){ // SE EXISTE EMAIL E SENHA NO BANCO
            $msgLogin = "OK";
            echo $msgLogin;
           $_SESSION['logado'] = true;
           $_SESSION['name'] = $resultado["name"];
           $_SESSION['birth_date'] = $resultado["birth_date"]; 
           $_SESSION['card_number'] = $resultado["card_number"]; 
           $_SESSION['security_code'] = $resultado["security_code"]; 
           $_SESSION['card_expiration_date'] = $resultado["card_expiration_date"]; 
           $_SESSION['email'] = $resultado["email"]; 
           $_SESSION['cardholder'] = $resultado["cardholder"]; 
           $_SESSION['CPF_CNPJ'] = $resultado["CPF_CNPJ"]; 
           $_SESSION['idUser'] = $resultado["id"];
           $_SESSION['is_admin'] = $resultado["is_admin"];
           $_SESSION['id'] = session_id();

           //$_SESSION['inicio'] = time();
           //$_SESSION['limite'] = 15;
          // header("Location: page/homePage.php");   
           //print_r($_SESSION);
           //echo json_encode(($_SESSION));
 
            }else{
                $msgLogin = "incorrect";
                echo $msgLogin;
            }
        }

    //$result = $conn->query($sql);
    // echo json_encode($result->fetch_all());
    //echo ($email.$password);





?>