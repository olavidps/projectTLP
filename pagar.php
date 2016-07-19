<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project TLP | Pagar</title>
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
                <h4 class="fleft">Pagar</h4>
                <ul class="breadcrumb fright">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">Pagar</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 orderSummaryRow">
                    <div class="row orderSummary m0">
                        <h4 class="heading">Resumen de su Orden</h4>
                        <div class="row m0 orderSummaryInner table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dining Table</td>
                                        <td>$840</td>
                                    </tr>
                                    <tr>
                                        <td>office furniture</td>
                                        <td>$420</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>cart subtotal</td>
                                        <td>$1260</td>
                                    </tr>
                                    <tr>
                                        <td>shipping</td>
                                        <td>Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td>order total price</td>
                                        <td>$1260</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
          
                <div class="col-sm-6">
                    <form action="#" method="post" role="form" class="row checkoutForm">
                        <div class="row m0">
                            <div id="billingAddress">
                                <h4 class="heading">Datos de Cliente</h4>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="firstName" id="firstName" placeholder="First Name" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control">
                                    </div>
                                </div>
                                <input type="text" name="companyName" id="companyName" placeholder="Company Name" class="form-control">
                                <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                                <input type="text" name="townCity" id="townCity" placeholder="Town / City" class="form-control">
                                <input type="text" name="stateCountry" id="stateCountry" placeholder="State / Country" class="form-control">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="zipcode" id="zipcode" placeholder="Postcode / ZIP" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" name="phone" id="phone" placeholder="Phone" class="form-control">
                                    </div>
                                </div>

                                <input type="checkbox" name="shippingAddressEscape" id="shippingAddressEscape">
                                <label for="shippingAddressEscape">Ship Items To The Above Billing Address</label>                    
                            </div>
                        </div>
                        
                        <div class="row m0">
                            <div class="col-sm-12">
                                <button class="btn btn-primary filled btn-sm" type="submit">Generar orden de Compra</button>
                            </div>
                        </div>
                    </form>   
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