<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto TLP | Inicio</title>
    <?php 
        require('header.php');
    ?>
</head>
<body>
    
    <header class="row" id="header2">
        <?php 
            require('nav.php');
        ?>   
    </header> <!--Header-->
    
    
    <section id="slider" class="row">
        <div class="row sliderCont flexslider m0">
            <ul class="slides nav">
                <li>
                    <img src="img/slider/1.png" alt="">
                    <div class="text_lines row m0">
                        <div class="container p0">
                            <h3>Slider 1</h3>
                            <h2>Descripción del slider1</h2>
                            <a href="#"><h4>Ver más</h4></a>
                        </div>
                    </div> <!--Text Lines-->
                </li>
                <li>
                    <img src="img/slider/2.png" alt="">
                    <div class="text_lines row m0">
                        <div class="container p0">
                            <h3>Slider 2</h3>
                            <h2>Descripción del slider2</h2>
                            <a href="#"><h4>Ver más</h4></a>
                        </div>
                    </div> <!--Text Lines-->
                </li>
                <li>
                    <img src="img/slider/3.png" alt="">
                    <div class="text_lines row m0">
                        <div class="container p0">
                            <h3>Slider 3</h3>
                            <h2>Descripción del slider3</h2>
                            <a href="#"><h4>Ver más</h4></a>
                        </div>
                    </div> <!--Text Lines-->
                </li>
            </ul>
        </div>
    </section> <!--Slider-->
    
    <section id="shopFeatures" class="row">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4 coreFeature">
                    <div class="row m0 coreFeatureInner">
                        <div class="row m0 icon circle"><img src="img/icon/shopping-bag.png" alt=""></div>
                        <h5>nuestros productos</h5>
                        <p>Ofrecemos calidad y acabados de primera.</p>
                    </div>
                </div>
                <div class="col-sm-4 coreFeature">
                    <div class="row m0 coreFeatureInner">
                        <div class="row m0 icon circle"><img src="img/icon/car2.png" alt=""></div>
                        <h5>entrega rápida</h5>
                        <p>Pedidos terminados en menos de 7 días</p>
                    </div>
                </div>
                <div class="col-sm-4 coreFeature">
                    <div class="row m0 coreFeatureInner">
                        <div class="row m0 icon circle"><img src="img/icon/cart2.png" alt=""></div>
                        <h5>compra fácil</h5>
                        <p>Compre facilmente mediante nuestra plataforma web.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--Shop Core Feature-->

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
                    <div class="fleft">&copy; 2016 <a href="index.php">Proyecto TLP</a> Todos los derechos reservados.</div>
                    <ul class="nav nav-pills fright">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
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
    
    <!--FlexSlider-->
    <script src="js/jquery.flexslider-min.js"></script>
    
    <!--Strella JS-->
    <script src="js/furniture.js"></script>
</body>
</html>