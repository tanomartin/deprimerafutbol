<?php

	// Casilla detino
	$casilla_destino = "consultas@lavictoriatrofeos.com.ar";
	$nombre = (isset($_POST["nombre"]))? $_POST["nombre"] : "";
	$email = (isset($_POST["email"]))? $_POST["email"] : "";
	$telefono = (isset($_POST["telefono"]))? $_POST["telefono"] : "";
	$mensaje = (isset($_POST["mensaje"]))? $_POST["mensaje"] : "";
	
	$headers =  "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "From: ".$nombre."<".$email.">"."\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n"; 
	$asunto = "Consulta - La Vistoria Trofeos";
	$cuerpo_mail .= "Nombre y Apellido: ".$nombre."<br>";
	$cuerpo_mail .= "Email: ".$email."<br>";
	$cuerpo_mail .= "Telefono: ".$telefono."<br>";
	$cuerpo_mail .= "Mensaje: ".$mensaje."<br>";

	mail($casilla_destino, $asunto, $cuerpo_mail, $headers);
	
	header('Location: contactoEnviado.html');
	
?>