<?php

	include("conexion.php");
	$apellidocliente = $_POST['clienteapellido'];
	$nombrecliente = $_POST['clientenombre'];
	$direccioncliente = $_POST['clientedireccion'];
	$telefonocliente = $_POST['clientetelefono'];	

	$query="INSERT INTO empleado(nombre, apellido, direccion, telefono) values('$nombrecliente','$apellidocliente','$direccioncliente','$telefonocliente')";


?>