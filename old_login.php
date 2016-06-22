<?php $site_url = "http://elezioni.allyoucandata.it/"; ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Open Elezioni Caserta</title>
<meta name="description" content="Open Elezioni Caserta">
<meta name="author" content="sevenda">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="shortcut icon" href="<?php echo $site_url;?>img/favicon.png">
   		<script src="<?php echo $site_url;?>js/vendor/jquery-2.2.0.min.js"></script>
  		<script src="<?php echo $site_url;?>js/sack.js"></script> 
    	<script src="<?php echo $site_url;?>js/typeahead.js"></script>
        <script src="<?php echo $site_url;?>js/jquery.autocomplete.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="<?php echo $site_url;?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $site_url;?>css/plugins.css">
<link rel="stylesheet" href="<?php echo $site_url;?>css/main.css">
<link rel="stylesheet" href="<?php echo $site_url;?>css/main2.css">
<link rel="stylesheet" href="<?php echo $site_url;?>css/themes.css">
<script src="<?php echo $site_url;?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div id="page-container" class="boxed"> 
  <?php include "header.php"; ?>

  <section class="site-section site-section-top site-section-light themed-background-dark-default">
    <div class="container">
      <h1 class="text-center animation-fadeInQuickInv" style="color: #8A8A8A;"><strong style="font-weight: 700;"> Login</strong></h1>
    </div>
  </section>
  <section class="site-content site-section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 site-block" style="text-align:center;"> 

          <h3><strong>Accedi Per Procedere</strong></h3>
          <a href="<?php echo $site_url;?>fb-login.php"><img src="<?php echo $site_url;?>img/facebook_login_long.gif"></a>

        </div>
      </div>
    </div>
  </section>
  <!-- END Project Info --> 
  
  <!-- Features -->
  <?php /*?><section class="site-content site-section themed-background-muted border-bottom">
    <div class="container text-center">
      <div class="row row-items">
        <div class="col-sm-4"> <a href="javascript:void(0)" class="feature visibility-none themed-background-shade" data-toggle="animation-appear" data-animation-class="animation-fadeInQuickInv" data-element-offset="-100"> <i class="fa fa-database"></i> </a>
          <div class="visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick2Inv" data-element-offset="-100">
            <h4 class="site-heading feature-heading"><strong>Tecnologia</strong></h4>
            <p class="feature-text text-muted" style="text-align:center;">Open elezioni di
              <a href="http://www.allyoucandata.it">allyoucandata</a> è stato
              sviluppato
              utilizzando solo
              software
              opensource.</p>
          </div>
        </div>
        <div class="col-sm-4"> <a href="javascript:void(0)" class="feature visibility-none themed-background-shade" data-toggle="animation-appear" data-animation-class="animation-fadeInQuickInv" data-element-offset="-100"> <i class="fa fa-desktop"></i> </a>
          <div class="visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick2Inv" data-element-offset="-100">
            <h4 class="site-heading feature-heading"><strong>Conoscenza</strong></h4>
            <p class="feature-text text-muted" style="text-align:center;">I dati distribuiti in
              formato open data,
              vengono consultati
              attraverso strumenti di
              visualizzazione semplici
              ed intuitivi</p>
          </div>
        </div>
        <div class="col-sm-4"> <a href="javascript:void(0)" class="feature visibility-none themed-background-shade" data-toggle="animation-appear" data-animation-class="animation-fadeInQuickInv" data-element-offset="-100"> <i class="fa fa-unlock-alt"></i> </a>
          <div class="visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick2Inv" data-element-offset="-100">
            <h4 class="site-heading feature-heading"><strong>Open data</strong></h4>
           <p class="feature-text text-muted" style="text-align:center;"><a href="https://github.com/opendatasevenda"><strong>Qui</strong></a> puoi scaricare il
              codice sorgente dell’
              applicazione <a href="https://it.wikipedia.org/wiki/GNU_Affero_General_Public_License">(licenza
              AGPL3)</a> mentre i dati
              (open by default) dal
              <a href="http://trasparenza.comune.caserta.it/index.php?id_sezione=771x">portale trasparenza</a> del
              comune di Caserta</p>
          </div>
        </div>
      </div>
    </div>
  </section><?php */?>
  <!-- END Features --> 
  
  <!-- Footer -->
  <?php include "footer.php"; ?>
  <!-- END Footer --> 
  
</div>
<!-- END Page Container --> 

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() --> 
<a href="#" id="to-top"><i class="fa fa-arrow-up"></i></a> 

<!-- jQuery, Bootstrap, jQuery plugins and Custom JS code --> 
<script src="js/vendor/jquery-2.2.0.min.js"></script> 
<script src="js/vendor/bootstrap.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/app.js"></script>
</body>
</html>