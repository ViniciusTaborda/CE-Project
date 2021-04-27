<?php
    
    include "./config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM films" ;
    $result = $conn->query($sql);
    $qnt_linhas = mysqli_num_rows($result);

    if ($qnt_linhas > 0){ 
        //$row_filme = mysqli_fetch_assoc($result);
           // $dado = $row_filme;

            //echo json_encode($dado);
            echo json_encode($result->fetch_all(PDO::FETCH_ASSOC));
           // print_r($$row_filme);
        
    } else {
        echo json_encode('Nenhum comentário encontrado');
    }


    $conn->close();

?>