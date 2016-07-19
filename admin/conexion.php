<?php

	$conexion = new mysqli("localhost","root","123456","tlp");
	if($conexion){
		echo "Conexion Exitosa";
	}
	else{
		echo "Conexion no Exitosa"
	}

?>