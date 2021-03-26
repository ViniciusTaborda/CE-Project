<?php
    
/*    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT email, password FROM user";
    $result = $conn->query($sql);

    //json_decode($result); 

    echo json_encode($result->fetch_all());





/*    if (isset($_POST['bLogin'])):
        $login = mysqli_escape_string($conn, $_POST['email']);
        $password = mysqli_escape_string($conn, $_POST['password']);

        if (empty($login) or empty($password)):
            $error[] = "<li> Preencher loging e senha <li>";
        else:
            $sql = "SELECT email FROM user WHERE login = 'email' " ;
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0):
                
                $sql = "SELECT * FROM user WHERE email = '$login' AND password = '$password' " ;
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) ==  1):
                    $dados = mysqli_fetch_array($result);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.html');
                else: $error[] = "<li> usuario ou senha incorreto <li>";
                endif;

            else:
                $error[] = "<li> usuário inexistente";
            endif;
        endif;

      endif;
    $conn->close();
*/

    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' " ;

      $result = $conn->query($sql);

      echo json_encode($result->fetch_all());

      
      echo ($email.$password);





?>