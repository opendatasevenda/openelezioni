<?php $site_url = "http://elezioni.allyoucandata.it/"; ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Open Elezioni Caserta</title>

        <meta name="description" content="Open Elezioni Caserta">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/main2.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <img src="img/login2_full_bg.jpg" alt="Full Background" class="full-bg animation-pulseSlow">
        <!-- END Full Background -->

        <!-- Login Container -->
        <div id="login-container">
            <!-- Login Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-pullDown" style="padding:56px;">
                <a href="<?php echo $site_url;?>index.php" class="site-logo">
                        <img class="header-scroll imageLogo"  src="<?php echo $site_url;?>/img/logo.png">
                    </a>
            </h1>
            <!-- END Login Header -->

            <!-- Login Block -->
            <div class="block animation-fadeInQuick">
                <!-- Login Title -->
                <div class="block-title">
                    <h2>Login</h2>
                </div>
                <!-- END Login Title -->

                <!-- Login Form -->
                <?php /*?>  <form id="form-login" action="index.html" method="post" class="form-horizontal">
                  <div class="form-group">
                        <label for="login-email" class="col-xs-12">Email</label>
                        <div class="col-xs-12">
                            <input type="text" id="login-email" name="login-email" class="form-control" placeholder="Your email..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="col-xs-12">Password</label>
                        <div class="col-xs-12">
                            <input type="password" id="login-password" name="login-password" class="form-control" placeholder="Your password..">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                            <div class="col-xs-8">
                                <label class="csscheckbox csscheckbox-primary">
                                    <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?
                                </label>
                            </div>
                        <div class="col-xs-4 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-success">Log In</button>
                        </div>
                    </div>
                </form><?php */?>
                <!-- END Login Form -->

                <!-- Social Login -->
     
                <div class="push text-center"><br>Puoi utilizzare il tuo account Facebook <br> per accedere all' applicazione.<br><br></div>
                <div class="row push">
                    <div class="col-lg-12">
                        <a href="<?php echo $site_url;?>fb-login.php" class="btn btn-effect-ripple btn-lg btn-info btn-block"><i class="fa fa-facebook"></i> Facebook</a>
                    </div>
                   <?php /*?> <div class="col-xs-6">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-sm btn-primary btn-block"><i class="fa fa-twitter"></i> Twitter</a>
                    </div><?php */?>
                </div>
                <!-- END Social Login -->
            </div>
            <!-- END Login Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small> <em>2016</em> &copy; Powered <!--with <i class="fa fa-heart text-danger"></i>--> by <a href="http://www.allyoucandata.it/">Allyoucandata</a></small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery-2.2.0.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/readyLogin.js"></script>
        <script>$(function(){ ReadyLogin.init(); });</script>
    </body>
</html>