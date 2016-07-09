<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto TLP</title>
    
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">    
    
    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-rating.css">
    
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!--Mechanic Styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://use.fontawesome.com/ea41b501c2.js"></script>
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <header class="row" id="header2">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 menu">
                    <nav class="navbar navbar-default navbar-static-top m0">
                        <div class="row m0">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav2">
                                    <i class="fa fa-bars"></i> Menú
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="mainNav2">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inicio</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="productos.php">Muebles de sala y comedor</a></li>
                                            <li><a href="productos.php">Muebles de Escritorio</a></li>
                                            <li><a href="productos.php">Oficina</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contacto</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
                <div class="col-sm-2 logo text-center">
                    <a href="index2.html"><img src="img/icon/logo2.png" alt=""></a>
                </div>
                <div class="col-sm-5 menu2">
                    <ul class="nav fright">
                        <li><a href="#">Seguimiento</a></li>
                        <li><a href="checkout.html">Pagar</a></li>
                        <li><a href="cart.html"><span class="badge">0</span></a></li>
                    </ul>
                </div>
            </div>
        </div>        
    </header> <!--Header-->
    
    
    <section id="breadcrumbRow" class="row">
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">productos</h4>
                <ul class="breadcrumb fright">
                    <li><a href="index.html">Inicio</a></li>
                    <li class="active">Productos</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 product2">
                    <div class="row m0 thumbnail">
                        <div class="row m0 imgHov">
                            <img src="img/productos/1.png" alt="">
                            <div class="hovArea row m0">
                                <div class="links row m0">
                                    <a href="single-product.html"><i class="fa fa-link"></i></a>
                                    <a href="img/productos/1.png" data-lightbox="product1" data-title="NICE DINING TABLE"><i class="fa fa-expand"></i></a>
                                </div>
                                <div class="row m0 getlike">
                                    <a href="#" class="fleft"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
                                    <a href="#" class="fright"><i class="fa fa-sliders"></i></a>
                                    <a href="#" class="fright"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row m0 productIntro">
                            <h5 class="heading"><a href="single-product.html">Mesa de roble para Oficina</a> <span><del>$240</del> $180</span></h5>
                            <h5 class="proCat">Mesa para Oficina</h5>
                            <div class="row stars m0">
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="vote">(8)</span>
                            </div>                            
                            <div class="row m0 colorSelect">
                                <input type="radio" id="cl1" name="proColor">
                                <label for="cl1"><span></span></label>
                                <input type="radio" id="cl2" name="proColor">
                                <label for="cl2"><span></span></label>
                                <input type="radio" id="cl3" name="proColor" checked>
                                <label for="cl3"><span></span></label>
                                <input type="radio" id="cl4" name="proColor">
                                <label for="cl4"><span></span></label>
                                <input type="radio" id="cl5" name="proColor">
                                <label for="cl5"><span></span></label>
                                <input type="radio" id="cl6" name="proColor">
                                <label for="cl6"><span></span></label>
                            </div>
                        </div>
                    </div>
                </div> <!--Product 2-->
                <div class="col-sm-4 product2">
                    <div class="row m0 thumbnail">
                        <div class="row m0 imgHov">
                            <img src="img/productos/2.png" alt="">
                            <div class="hovArea row m0">
                                <div class="links row m0">
                                    <a href="single-product.html"><i class="fa fa-link"></i></a>
                                    <a href="img/productos/2.png" data-lightbox="product2" data-title="PRO OFFICE FURNITURE"><i class="fa fa-expand"></i></a>
                                </div>
                                <div class="row m0 getlike">
                                    <a href="#" class="fleft"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="#" class="fright"><i class="fa fa-sliders"></i></a>
                                    <a href="#" class="fright"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row m0 productIntro">
                            <h5 class="heading"><a href="single-product.html">pro office furniture</a> <span>$180</span></h5>
                            <h5 class="proCat">Office Furniture</h5>
                            <div class="row stars m0">
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="vote">(8)</span>
                            </div>                            
                            <div class="row m0 colorSelect">
                                <input type="radio" id="cl1" name="proColor">
                                <label for="cl1"><span></span></label>
                                <input type="radio" id="cl2" name="proColor">
                                <label for="cl2"><span></span></label>
                                <input type="radio" id="cl3" name="proColor" checked>
                                <label for="cl3"><span></span></label>
                                <input type="radio" id="cl4" name="proColor">
                                <label for="cl4"><span></span></label>
                                <input type="radio" id="cl5" name="proColor">
                                <label for="cl5"><span></span></label>
                                <input type="radio" id="cl6" name="proColor">
                                <label for="cl6"><span></span></label>
                            </div>
                        </div>
                    </div>
                </div> <!--Product 2-->
                <div class="col-sm-4 product2">
                    <div class="row m0 thumbnail">
                        <div class="row m0 imgHov">
                            <img src="img/productos/3.png" alt="">
                            <div class="hovArea row m0">
                                <div class="links row m0">
                                    <a href="single-product.html"><i class="fa fa-link"></i></a>
                                    <a href="img/productos/3.png" data-lightbox="product3" data-title="FAMILY DINING TABLE"><i class="fa fa-expand"></i></a>
                                </div>
                                <div class="row m0 getlike">
                                    <a href="#" class="fleft"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="#" class="fright"><i class="fa fa-sliders"></i></a>
                                    <a href="#" class="fright"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row m0 productIntro">
                            <h5 class="heading"><a href="single-product.html">FAMILY DINING TABLE</a> <span><del>$240</del> $180</span></h5>
                            <h5 class="proCat">Simple Dining Set</h5>
                            <div class="row stars m0">
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="vote">(8)</span>
                            </div>                            
                            <div class="row m0 colorSelect">
                                <input type="radio" id="cl1" name="proColor">
                                <label for="cl1"><span></span></label>
                                <input type="radio" id="cl2" name="proColor">
                                <label for="cl2"><span></span></label>
                                <input type="radio" id="cl3" name="proColor" checked>
                                <label for="cl3"><span></span></label>
                                <input type="radio" id="cl4" name="proColor">
                                <label for="cl4"><span></span></label>
                                <input type="radio" id="cl5" name="proColor">
                                <label for="cl5"><span></span></label>
                                <input type="radio" id="cl6" name="proColor">
                                <label for="cl6"><span></span></label>
                            </div>
                        </div>
                    </div>
                </div> <!--Product 2-->
                <div class="col-sm-4 product2">
                    <div class="row m0 thumbnail">
                        <div class="row m0 imgHov">
                            <img src="img/productos/4.png" alt="">
                            <div class="hovArea row m0">
                                <div class="links row m0">
                                    <a href="single-product.html"><i class="fa fa-link"></i></a>
                                    <a href="img/productos/4.png" data-lightbox="product4" data-title="WOW SOFAS"><i class="fa fa-expand"></i></a>
                                </div>
                                <div class="row m0 getlike">
                                    <a href="#" class="fleft"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="#" class="fright"><i class="fa fa-sliders"></i></a>
                                    <a href="#" class="fright"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row m0 productIntro">
                            <h5 class="heading"><a href="single-product.html">WOW SOFAS</a> <span>$1180</span></h5>
                            <h5 class="proCat">Sofa Sets</h5>
                            <div class="row stars m0">
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star stared"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="vote">(8)</span>
                            </div>                            
                            <div class="row m0 colorSelect">
                                <input type="radio" id="cl1" name="proColor">
                                <label for="cl1"><span></span></label>
                                <input type="radio" id="cl2" name="proColor">
                                <label for="cl2"><span></span></label>
                                <input type="radio" id="cl3" name="proColor" checked>
                                <label for="cl3"><span></span></label>
                                <input type="radio" id="cl4" name="proColor">
                                <label for="cl4"><span></span></label>
                                <input type="radio" id="cl5" name="proColor">
                                <label for="cl5"><span></span></label>
                                <input type="radio" id="cl6" name="proColor">
                                <label for="cl6"><span></span></label>
                            </div>
                        </div>
                    </div>
                </div> <!--Product 2-->
            </div>
        </div>
    </section>

    <footer class="row">
        <div class="row m0 topFooter">
            <div class="container line1">
                <div class="row footFeatures">
                    <div class="col-sm-4 col-md-4 col-xs-4 footFeature">
                        <div class="media">
                            <div class="media-left icon"><img src="img/icon/car3.png" alt=""></div>
                            <div class="media-body texts">
                                <h4>Envío nacional</h4>
                                <h2>24/7</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-4 footFeature">
                        <div class="media m0">
                            <div class="media-left icon"><img src="img/icon/tel24-7_2.png" alt=""></div>
                            <div class="media-body texts">
                                <h4>Atención de 8am - 8pm</h4>
                                <h2>(044) 232377</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-4 footFeature">
                        <div class="media m0">
                            <div class="media-left icon"><img src="img/icon/shopping-bag2.png" alt=""></div>
                            <div class="media-body texts">
                                <h4>conoce nuestras</h4>
                                <h2>Ofertas</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row m0 copyRight">
            <div class="container">
                <div class="row">
                    <div class="fleft">&copy; 2016 <a href="index.html">Proyecto TLP</a> Todos los derechos reservados.</div>
                    <ul class="nav nav-pills fright">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="about.html">Productos</a></li>
                        <li><a href="blog.html">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <!--jQuery, Bootstrap and other vendor JS-->
    
    <!--jQuery-->
    <script src="js/jquery-2.1.3.min.js"></script>
    
    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    
    <!--Bootstrap JS-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--Nice Scroll-->
    <script src="js/nicescroll/jquery.nicescroll.js"></script>
        
    <!--Lightshot-->
    <script src="js/lightbox.min.js"></script>

    <!--Counter Up-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--Owl Carousel-->
    <script src="js/owl.carousel.min.js"></script>
    
    <!--Isotope-->
    <script src="js/isotope-custom.js"></script>
    
    <!--Rating-->
    <script src="js/bootstrap-rating.min.js"></script>
    
    <!--FlexSlider-->
    <script src="js/jquery.flexslider-min.js"></script>
    
    <!--Strella JS-->
    <script src="js/furniture.js"></script>
</body>
</html>