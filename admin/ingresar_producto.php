<?php
	include("conexion.php");    
    $nombreproducto = $_POST['productonombre'];
    $stockproducto = $_POST['productostock'];
    $detallesproducto = $_POST['productodetalles'];   

    $query="INSERT INTO producto(nombre, stock, detalles) values('$nombreproducto','$stockproducto','$detallesproducto')";
    $resultado=$conexion->query($query);
    
    $ultimo_id = $conexion->insert_id;

	$carpetaDestino="../recursos/";
 
    # si hay algun archivo que subir
    if($_FILES["archivo"]["name"][0])
    {
        # recorremos todos los arhivos que se han subido
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
            # si es un formato de imagen
            if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png")
            {
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
 
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                        $ruta=$_FILES["archivo"]["name"][$i];
                        $query="INSERT INTO imagen(ruta, codproducto) values('$ruta','$ultimo_id')";
                        $resultado=$conexion->query($query);

                    }else{
                        //echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }
                }else{
                    //echo "<br>No se ha podido crear la carpeta: up/".$user;
                }
            }else{
                //echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es imagen jpg";
            }
        }
        header("Location: productos.php");
    }else{
        echo "<br>No se ha subido ninguna imagen";
    }    
?>