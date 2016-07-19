<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project TLP | Producto</title>
    <?php 
        require('header.php')
    ?>
</head>
<body>
    
    <header class="row" id="header2">
        <?php 
            require('nav.php');
            require('config/config.php');
            $codproducto = $_GET['codproducto'];
            $producto = $conexion -> query("SELECT * FROM producto WHERE codproducto='$codproducto'");
            $fila = $producto -> fetch_assoc();
        ?>
    </header> <!--Header-->
    
    <section id="breadcrumbRow" class="row">
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">detalles de producto</h4>
                <ul class="breadcrumb fright">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">producto</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="row contentRowPad">
        <div class="container">
            <div class="row singleProduct">
                <div class="col-sm-7">
                    <div class="row m0 flexslider" id="productImageSlider">
                        <ul class="slides">
                            <?php 
                            $imagen = $conexion -> query("SELECT * FROM imagen WHERE codproducto='$codproducto'");
                            while($filaimagen = $imagen -> fetch_assoc()){
                            ?>
                                <li><img src="recursos/<?php echo $filaimagen['ruta']; ?>"></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="row m0 flexslider" id="productImageSliderNav">
                        <ul class="slides">
                            <?php 
                            $imagen = $conexion -> query("SELECT * FROM imagen WHERE codproducto='$codproducto'");
                            while($filaimagen = $imagen -> fetch_assoc()){
                            ?>
                                <li><img class="img-thumbnail" src="recursos/<?php echo $filaimagen['ruta']; ?>"></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row m0">
                        <h4 class="heading"><?php echo $fila['nombre']; ?></h4>
                        <h3 class="heading price"><del>S/.<?php echo $fila['precio'] + 100; ?></del>S/.<?php echo $fila['precio']; ?></h3>
                        <div class="row descList m0">
                            <dl class="dl-horizontal">
                                <dt>Fabricante :</dt>
                                <dd>Proyecto Hogar SA</dd>
                                <dt>Stock :</dt>
                                <dd><?php echo $fila['stock']; ?> unidades</dd>
                                <dt>Código :</dt>
                                <dd><?php echo $fila['codproducto']; ?></dd>
                            </dl>
                        </div>
                        <div class="row m0 shortDesc">
                            <p class="m0"><?php echo $fila['detalles']; ?></p>
                        </div>
                        <br>
                        <div class="row m0 qtyAtc">
                            <div class="fleft quantity">
                                <div class="fleft">Cantidad<span>=</span></div>
                                <div class="input-group spinner">
                                    <input type="text" class="form-control" value="2">
                                    <div class="input-group-btn-vertical">
                                        <button class="btn btn-default"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-default"><i class="fa fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="fleft btn btn-default"><img src="img/icon/cart3.png" alt="">Agregar al carro</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m0 tabRow">
                <ul class="nav nav-tabs" role="tablist" id="shortcodeTab">
                    <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">
                        <i class="fa fa-align-left"></i> description
                    </a></li>
                </ul>
                <?php 
                    $codproducto = $fila['codproducto'];
                    $queryImg = $conexion -> query("SELECT * FROM imagen WHERE codproducto='$codproducto'");
                    $img = $queryImg -> fetch_assoc();
                ?>
                <div class="tab-content shortcodeTabContent">
                    <div role="tabpanel" class="tab-pane row m0 active" id="description">
                        <div class="fleft img"><img src="recursos/<?php echo $img['ruta']; ?>" alt="" height='80px'></div>
                        <div class="fleft desc">
                            <h5 class="heading">Detalles del Producto</h5>
                            <p><?php echo $fila['detalles']; ?></p>
                        </div>
                    </div>
                </div>
            </div> <!--Tabs Row-->
        </div>
    </section>
    
    <footer class="row">
        <?php 
            require('footer.php');
        ?>
    </footer>
</body>
</html>