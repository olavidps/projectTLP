<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project TLP | Carro de Compras</title>
    <?php 
        require('header.php')
    ?>
</head>
<body>
    
    <header class="row" id="header2">
        <?php 
            require('nav.php')
        ?>
    </header> <!--Header-->
    
    <section id="breadcrumbRow" class="row">
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">Carro de compra</h4>
                <ul class="breadcrumb fright">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">Carro de compra</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="row contentRowPad">
        <div class="container">
            <div class="row cartPage">
                <h3 class="heading pageHeading">Carro de compra</h3>
                <div class="table-responsive cartTable row m0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="productImage">Imagen del Producto</th>
                                <th class="productName">Nombre del Producto</th>
                                <th>edit</th>
                                <th>price</th>
                                <th>quantity</th>
                                <th>total</th>
                                <th>remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="alert" role="alert">
                                <td class="productImage"><img src="images/product/single/l1.png" alt=""></td>
                                <td class="productName">
                                    <h6 class="heading">dining table</h6>
                                    <div class="row descList m0">
                                        <dl class="dl-horizontal">
                                            <dt>manufacturer :</dt>
                                            <dd>Tartaan & Co</dd>
                                            <dt>product code :</dt>
                                            <dd>Xuo15</dd>
                                            <dt>color :</dt>
                                            <dd>Black</dd>
                                            <dt>size :</dt>
                                            <dd>Queen</dd>
                                        </dl>
                                    </div>
                                </td>
                                <td><a href="#" class="edit"><i class="fa fa-edit"></i></a></td>
                                <td class="price"><del>$580</del>$420</td>
                                <td>
                                    <div class="input-group spinner">
                                        <input type="text" class="form-control" value="2">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default"><i class="fa fa-angle-up"></i></button>
                                            <button class="btn btn-default"><i class="fa fa-angle-down"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="price">$840</td>
                                <td><a href="#" class="edit" data-dismiss="alert" aria-label="Close"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <tr class="alert" role="alert">
                                <td><img src="images/product/single/l3.png" alt=""></td>
                                <td>
                                    <h6 class="heading">office furnitures</h6>
                                    <div class="row descList m0">
                                        <dl class="dl-horizontal">
                                            <dt>manufacturer :</dt>
                                            <dd>Tartaan & Co</dd>
                                            <dt>product code :</dt>
                                            <dd>Xuo15</dd>
                                            <dt>color :</dt>
                                            <dd>Black</dd>
                                            <dt>size :</dt>
                                            <dd>Queen</dd>
                                        </dl>
                                    </div>
                                </td>
                                <td><a href="#" class="edit"><i class="fa fa-edit"></i></a></td>
                                <td class="price">$420</td>
                                <td>
                                    <div class="input-group spinner">
                                        <input type="text" class="form-control" value="1">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default"><i class="fa fa-angle-up"></i></button>
                                            <button class="btn btn-default"><i class="fa fa-angle-down"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="price">$420</td>
                                <td><a href="#" class="edit" data-dismiss="alert" aria-label="Close"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="#" class="btn btn-primary btn-lg">continue shopping</a>
                                    <a href="#" class="btn btn-default btn-lg fright">update shopping cart</a>
                                    <a href="#" class="btn btn-default btn-lg fright">clear shopping cart</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row m0">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        <div class="row m0 totalCheckout">
                            <div class="descList row m0">
                                <dl class="dl-horizontal">
                                    <dt>Subtotal</dt>
                                    <dd>$1260</dd>
                                    <dt class="gt">Grand Total</dt>
                                    <dd>$1260</dd>
                                </dl>                                
                            </div>                               
                            <a href="#" class="btn btn-default btn-sm">Proceder a pagar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="row">
        <?php 
            require('footer.php')
        ?>
    </footer>
</body>
</html>