<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Open Elezioni Caserta</title>

        <meta name="description" content="Open Elezioni Caserta">
        <meta name="author" content="sevenda">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

          <?php include "stylesheet.php"; ?>
    </head>
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container" class="boxed">
            <!-- Site Header -->
               <?php include "header.php"; ?>
            <!-- END Site Header -->

            <!-- Intro -->
            <section class="site-section site-section-top site-section-light themed-background-dark-default">
                <div class="container">
                    <h1 class="text-center animation-fadeInQuickInv" style="color: #8A8A8A;">Restiamo in <strong style="font-weight: 700;"> Contatto.</strong></h1>
                </div>
            </section>
            <!-- END Intro -->

<!-- Google Map -->
            <!-- Gmaps.js (initialized in js/pages/contact.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
            <div id="gmap" class="themed-background-muted" style="height: 300px;"></div>
            <!-- END Google Map -->

            <!-- Contact -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 site-block">
                            <form action="contact.html#form-contact" method="post" id="form-contact">
                                <div class="form-group">
                                    <label for="contact-name">Nome</label>
                                    <input type="text" id="contact-name" name="contact-name" class="form-control input-lg" placeholder="Il tuo nome...">
                                </div>
                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input type="text" id="contact-email" name="contact-email" class="form-control input-lg" placeholder="La tua Email...">
                                </div>
                                <div class="form-group">
                                    <label for="contact-message">Messaggio</label>
                                    <textarea id="contact-message" name="contact-message" rows="10" class="form-control input-lg" placeholder="Hai bisogno di Aiuto?"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Invio Messaggio</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Contact -->

            

            

            

            <!-- Footer -->
               <?php include "footer.php"; ?>
            <!-- END Footer -->
            
            
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-arrow-up"></i></a>
        
        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps -->
        <script src="//maps.google.com/maps/api/js"></script>
        <script src="js/plugins/gmaps.min.js"></script>

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery-2.2.0.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>