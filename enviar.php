<?php
require 'gestor_correo.php';
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	envia_correo($email,$mensaje);

	

?>
