<?php
session_start();

include "./config.php";
$conn = new mysqli($servername, $username, $password, $dbname);
 
$idUser = $_SESSION['idUser'];
$idFilm = $_POST['idFilm'];
$idFilm = intval(preg_replace('/[^0-9]+/', '', $idFilm), 10); 


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM favorites WHERE idUser = '$idUser' AND idFilm = '$idFilm'" ;
$result = $conn->query($sql);
$qnt_linhas = mysqli_num_rows($result);
$resultado = mysqli_fetch_assoc($result);


if ($qnt_linhas > 0){ 
   echo json_encode($result->fetch_all(PDO::FETCH_ASSOC));
   $insertLike = $conn->query("DELETE FROM favorites WHERE idUser = '$idUser' AND idFilm = '$idFilm'");
//   $updateFilme = $conn->query("UPDATE films SET favorites = 0 WHERE id= '$idFilm'");
    echo json_encode('desfavoritei');
} else {
    $insertLike= $conn->query("INSERT INTO favorites (idFilm, idUser)VALUES ('$idFilm', '$idUser')");
//  $updateFilme = $conn->query("UPDATE films SET favorites = 1 WHERE id = '$idFilm'");
    echo json_encode('favoritei');
}
 
if ($qnt_linhas > 0){
    $_SESSION['color'] = "far fa-star star colorStar";
    }else{
        $_SESSION['color'] = "far fa-star star";
    }



$conn->close();

?>