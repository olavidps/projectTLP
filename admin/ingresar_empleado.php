<?php

	include("conexion.php");
	$apellidoempleado = $_POST['usuarioapellido'];
	$nombreempleado = $_POST['usuarionombre'];	

	$query="INSERT INTO empleado(nombre, apellido) values('$nombreempleado','$apellidoempleado')";
	$resultado=$conexion->query($query);


?>