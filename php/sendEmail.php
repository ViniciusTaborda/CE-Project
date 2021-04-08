 <?php

	date_default_timezone_set('Etc/UTC');
	require './PHPMailer/PHPMailerAutoload.php';
    
	$name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

	$tituloEmail = "Confirm your e-mail at GVFilms!";

	$link = "http://localhost/CE-Project/php/setValid.php?email=$email";
	$message = "Hey '$name'!Please click the link below to verify your account. <br><br> '$link'";

	$mail= new PHPMailer;
	$mail->IsSMTP(); 
	$mail->CharSet = 'UTF-8';   
	$mail->SMTPDebug = 2;       // 0 = nao  o debug, 2 = mostra o debug
	$mail->SMTPAuth = true;     
	$mail->SMTPSecure = 'ssl';  
	$mail->Host = 'smtp.gmail.com'; 
	$mail->Port = 465; 
	$mail->Username = 'vineeducostaa@gmail.com'; 
	$mail->Password = 'hotweels123';
	$mail->SetFrom('vineeducostaa@gmail.com', 'GVFilms');
	$mail->addAddress($email,'');
	$mail->Subject = $tituloEmail;
	$mail->msgHTML($message);
       
	$mail->send();

	// Configure o Gmail para permitir aplicativos de terceiro 
	// https://myaccount.google.com/lesssecureapps


?>
