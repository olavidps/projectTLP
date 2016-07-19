<?php
	$conexion = new mysqli("localhost","root","","tlp");
	if(mysqli_connect_errno()){
		echo "Conexion Fallida " . mysqli_connect_error();
	}
?>