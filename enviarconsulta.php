<?php

	var_dump($_POST);
	
	// Casilla detino
	//$casilla_destino = "info@gambetafemenina.com.ar";
	$casilla_destino = "tanomartin05@gmail.com";
	//$casilla_destino = "aialvarez@yahoo.com";
	$nombre = (isset($_POST["nombre"]))? $_POST["nombre"] : "";
	$email = (isset($_POST["email"]))? $_POST["email"] : "";
	$telefono = (isset($_POST["telefono"]))? $_POST["telefono"] : "";
	$mensaje = (isset($_POST["mensaje"]))? $_POST["mensaje"] : "";
	
	
	$asunto = "Consulta - La Vistoria Trofeos";
	$cuerpo_mail .= "Nombre y Apellido: ".$nombre."\r\n";
	$cuerpo_mail .= "Email: ".$email."\r\n";
	$cuerpo_mail .= "Telefono: ".$telefono."\r\n";
	$cuerpo_mail .= "Mensaje: ".$mensaje."\r\n";
	
	print($cuerpo_mail);

	mail($casilla_destino, $asunto, $cuerpo_mail);
	
	//header('Location: contactoEnviado.html');
	
?>