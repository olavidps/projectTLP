<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project TLP | Contacto</title>
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
                <h4 class="fleft">Contacto</h4>
                <ul class="breadcrumb fright">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">Contacto</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="googleMapRow" class="row">
        <div class="row m0" id="mapaCaja" style="height:350px;"></div>
    </section>
    
    <section id="contactRow" class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row m0">
                        <h4 class="contactHeading heading">formulario de contacto</h4>
                    </div>
                    <div class="row m0 contactForm">
                        <form class="row m0" id="contactForm" method="post" name="contact" action="contact_process.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Nombre *</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="row m0">
                                <label for="subject">Asunto *</label>
                                <input type="text" class="form-control" name="subject" id="subject">
                            </div>
                            <div class="row m0">
                                <label for="message">Mensaje</label>
                                <textarea name="message" id="message" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary btn-lg filled" type="submit">Enviar Mensaje</button>                            
                        </form>
                        <div id="success">
                                <span class="green textcenter">
                                    Tu mensaje fue enviado correctamente!. Te responderemos lo más pronto posible.
                                </span>
                        </div>
                        <div id="error">
                            <span>
                                Pasó algo malo, vuelve a intentarlo porfavor.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row m0">
                        <h4 class="contactHeading heading">información de contacto</h4>
                    </div>
                    <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">Donde encontrarnos</h5>
                            <p>Estamos en:</p>
                            <h5>Av Juan Pablo II , #404 tercer piso</h5>
                        </div> 
                    </div> <!--contactInfo-->
                    <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading"> Email@</h5>
                            <p>Envie sus dudas o sugerencias al siguiente correo:</p>
                            <h5>info@projecttlp.com</h5>
                        </div>
                    </div> <!--contactInfo-->
                    <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">Necesita llamarnos?</h5>
                            <p>De Lunes a Viernes,10:00 AM - 8:00 PM:</p>
                            <h5>044-125678</h5>
                        </div>
                    </div> <!--contactInfo-->
                </div>
            </div>
        </div>
    </section>
    <footer class="row">
        <?php 
            require('footer.php');
        ?>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOaNfYcqD05B8OqnM13xA8-nZqdWdxN5I"></script>
            <script type="text/javascript" src="js/mapa.js"></script>
    </footer>

</body>
</html>