<?php
	$conexion = new mysqli("localhost","root","123456","tlp");
	if(mysqli_connect_errno()){
		echo "Conexion Fallida " . mysqli_connect_error();
	}/*
	else{
		echo "Conexion Exitosa";
	}
	*/

?>