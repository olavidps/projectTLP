<?php
	include("conexion.php");    
    $nombreproducto = $_POST['productonombre'];
    $stockproducto = $_POST['productostock'];
    $detallesproducto = $_POST['productodetalles'];   

    $query="INSERT INTO producto(nombre, stock, detalles) values('$nombreproducto','$stockproducto','$detallesproducto')";
    $resultado=$conexion->query($query);
    if($resultado){
        echo "se inserto";
    }
    else
    {
        echo "No se inserto";
    }




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
                        echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: up/".$user;
                }
            }else{
                echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es imagen jpg";
            }
        }
    }else{
        echo "<br>No se ha subido ninguna imagen";
    }

    $query="SELECT codproducto FROM producto ORDER BY codproducto DESC LIMIT 1";
    $resultado=$conexion->query($query);
    $var = $resultado;

    echo "string"+$var;
    ?>
?>