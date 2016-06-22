<?php 
session_start();
if(empty($_COOKIE['security_uid'])){

	header('location:http://elezioni.allyoucandata.it/login.php');
}

?>
<?php $site_url = "http://elezioni.allyoucandata.it/"; ?>
<!-- Icons -->
<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo $site_url;?>img/favicon.png">
   		<script src="<?php echo $site_url;?>js/vendor/jquery-2.2.0.min.js"></script>
  		<script src="<?php echo $site_url;?>js/sack.js"></script> 
    	<script src="<?php echo $site_url;?>js/typeahead.js"></script>
        <script src="<?php echo $site_url;?>js/jquery.autocomplete.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      	
       
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
<link rel="stylesheet" href="<?php echo $site_url;?>css/bootstrap.min.css">

<!-- Related styles of various icon packs and plugins -->
<link rel="stylesheet" href="<?php echo $site_url;?>css/plugins.css">

<!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
<link rel="stylesheet" href="<?php echo $site_url;?>css/main.css">
<link rel="stylesheet" href="<?php echo $site_url;?>css/main2.css">

<!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
<link rel="stylesheet" href="<?php echo $site_url;?>css/themes.css">
<!-- END Stylesheets -->

<!-- Modernizr (browser feature detection library) -->
<script src="<?php echo $site_url;?>js/vendor/modernizr-2.8.3.min.js"></script>