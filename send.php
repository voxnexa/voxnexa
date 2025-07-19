<?php

//librerias
  require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();

//Configuracion servidor mail
$mail->From = "'noreply@gmail.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='noreplytovarsat@gmail.com'; //nombre usuario
$mail->Password = 'jewkoyunctepwqst'; //contraseña generada por gmail,


//Agregar destinatario

$mail->AddAddress('anllymendez20@gmail.com','INFOTMACION ATC TOVARSAT');
//$mail->AddAddress('sistemas@tovarsat.com.ve','INFOTMACION ATC TOVARSAT');
$mail->Subject = $_POST['name'];
$messageBody = " \n   Nombre y Apellido:  {$_POST['name']} \n  
				 \n   Email:  {$_POST['name']} \n     
				 \n   Telefono:  {$_POST['email']} \n   
				 \n   Mensaje:  {$_POST['message']} \n        ";

$mail-> Body = $messageBody;
				

//Avisar si fue enviado o no y dirigir al index

if ($mail->Send()) {
    echo "Mensaje enviado con �xito,Verifica T� Email";
		  header('Location: index.html');
		
		
} else {
    echo'<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo");
		 
		  		   
        </script>';
		   header('Location:index.html');
	
		
}
