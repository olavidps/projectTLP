<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto TLP | Productos</title>
    <?php 
        require('header.php');
        require('config/config.php');
    ?>
</head>
<body>
    
    <header class="row" id="header2">
        <?php 
            require('nav.php');
        ?>    
    </header> <!--Header-->
    
    
    <section id="breadcrumbRow" class="row">
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">productos</h4>
                <ul class="breadcrumb fright">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">Productos</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="row contentRowPad">
        <div class="container">
            <div class="row">
                <?php 
                    $productos = $conexion -> query("SELECT * FROM producto");
                    while($fila = $productos -> fetch_assoc()){
                        $codproducto = $fila['codproducto'];
                        $queryImg = $conexion -> query("SELECT * FROM imagen WHERE codproducto='$codproducto'");
                        $img = $queryImg -> fetch_assoc();
                ?>
                            <div class="col-sm-4 product2">
                                <div class="row m0 thumbnail">
                                    <div class="row m0 imgHov">
                                        <img src="recursos/<?php echo $img['ruta']; ?>" alt="">
                                        <div class="hovArea row m0">
                                            <div class="links row m0">
                                                <a href="recursos/<?php echo $img['ruta']; ?>" data-lightbox="product4" data-title="WOW SOFAS"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="row m0 getlike">
                                                <a href="#" class="fleft"><i class="fa fa-shopping-cart"></i> Agregar al carro </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m0 productIntro">
                                        <h5 class="heading">
                                            <a href="producto.php?codproducto=<?php echo $fila['codproducto']; ?>"><?php echo $fila['nombre']; ?></a> 
                                            <span>S/.<?php echo $fila['precio']; ?></span>
                                        </h5>
                                    </div>
                                </div>
                            </div> <!--Product 2-->
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <?php 
        require('footer.php');
    ?>
</body>
</html>