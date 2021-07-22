<?php


if(isset($_REQUEST["isvalid"])){
	
	$youremail = "denis.cantero1987@gmail.com"; // Enter your email here!!
	$usersname = $_POST["usersname"];
	$usersemail = $_POST["usersemail"];
	$usersphonenumber = $_POST["usersphone"];
	$mailsubject = "Email desde ServiWeb";	
	$usersmessage = $_POST["userscomment"];
	$message =
	
	"$usersname te ha contactado desde tu sitio.
	
	$subject:
	
	Su mensaje es el siguiente:
	
	$usersmessage
	
	...............................................
	
	Detalles de contacto:
	
	Número de teléfono: $usersphonenumber
	Email Address: $usersemail"; 
	
	$headers = 'De:' . $usersemail . "\r\n";
	mail($youremail, $mailsubject, $message, $headers);
	
	echo "success";
	
} else {
	
	echo "failed";
	
}