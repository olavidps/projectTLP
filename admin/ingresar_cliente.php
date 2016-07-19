<?php
	include("conexion.php");
	$apellidocliente = $_POST['clienteapellido'];
	$nombrecliente = $_POST['clientenombre'];
	$direccioncliente = $_POST['clientedireccion'];
	$telefonocliente = $_POST['clientetelefono'];	

	$query="INSERT INTO cliente(nombre, apellido, direccion, telefono) values('$nombrecliente','$apellidocliente','$direccioncliente','$telefonocliente')";

	$resultado=$conexion->query($query);
	if($resultado){
		echo "se inserto";
	}
	else
	{
		echo "No se inserto";
	} 
?>