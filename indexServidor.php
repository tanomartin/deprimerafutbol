<?php 
	$direccion = $_SERVER['HTTP_HOST'];
	$findme   = 'lavictoriatrofeos';
	$redireccion = strpos($direccion, $findme);
	if ($redireccion !== false) {
		header("location: /lavictoria");
		exit(0);
	} 
	$findme   = 'lavecchiafutbol';
	$redireccion = strpos($direccion, $findme);
	if ($redireccion !== false) {
		header("location: /lavecchia");
		exit(0);
	}
	$findme   = 'deprimerafutbol';
	$redireccion = strpos($direccion, $findme);
	if ($redireccion !== false) {
		header("location: /deprimera");
		exit(0);
	}
?>
