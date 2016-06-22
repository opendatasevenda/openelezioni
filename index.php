

<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    
  <style> 
	.acInput {
        width: 200px;
}
.acResults {
        padding: 0px;
        border: 1px solid WindowFrame;
        background-color: Window;
        overflow: hidden;
}

.acResults ul {
        width: 100%;
        list-style-position: outside;
        list-style: none;
        padding: 0;
        margin: 0;
}

.acResults li {
        margin: 0px;
        padding: 2px 5px;
        cursor: pointer;
        display: block;
        width: 100%;
        font: menu;
        font-size: 12px;
        overflow: hidden;
}

.acLoading {
        background : url('indicator.gif') right center no-repeat;
}

.acSelect {
        background-color: Highlight;
        color: HighlightText;
}
Hide details
Change log
ae3cf14b6d59 by Dylan Verheul <dylan.verheul> on Apr 18, 2011   Diff
Multiple fixes, new options to support
standard Tab/Return behavior
Go to: 	
Project members, sign in to write a code review
Older revisions
 6e6f877cac5b by Dylan Verheul <dy...@zostera.nl> on Nov 16, 2009   Diff 
All revisions of this file
File info
Size: 538 bytes, 37 lines
View raw file
  </style>
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
            <?php include "header.php" ; ?>
            <!-- END Site Header -->

            <!-- Intro + Action -->
            <section class="site-section site-section-top site-section-light themed-background-dark-default">
                <div class="container">
                    <div class="push text-center">
                        <h1 class="animation-fadeInQuick2Inv" style="color: #8A8A8A;"> Lo storico dei risultati elettorali <br>delle <strong style="font-weight: 700;">Elezioni Amministrative a Caserta.</strong></h1>
                        
                        
                  </div>
                    <div class="site-promo-img visibility-none" data-toggle="animation-appear" data-animation-class="animation-slideUpQuick" data-element-offset="0">
                        <img src="img/slide_home.png" alt="">
                    </div>
                </div>
            </section>
            <!-- END Intro + Action -->

            <!-- Promo Features -->
            <section class="site-content site-section themed-background-dark" style="color: #fff;">
                <div class="container">
<h2 class="site-heading text-center">Scopri <strong style="font-weight: 700;">percentuali e voti totali </strong> delle passate tornate elettorali.</h2> </div>
            </section>
            <!-- END Promo Features -->

            <!-- Promo #1 -->
            <section class="site-section site-content border-bottom overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 push">
                        <br><br>
                            <h2 class="site-heading">Cerca <strong style="font-weight: 700;">Candidato</strong></h2>
                            <p class="feature-text text-muted push">
                            
                            Cerca il nome di un candidato nelle passate lezioni comunali (2002, 2006, 2011) consulta le preferenze raccolte dai candidati per ogni sezione elettorale
                            </p>

 <div class="col-md-12">    

 <!--  Script Suggest --> 
           
            

   

<script>
/*function startSuggest() {
var text = document.getElementById("site-search").value;
 alert(text);
 var json = "http://api.elezioni.allyoucandata.it/1.0/candidati/elenco/json/?nome="+text;
 var contact = JSON.parse(json);
 var cars = ["Saab", "Volvo", "BMW"];

  new Suggest.Local(
        "site-search",    // input element id.
        "suggest", // suggestion area id.
        cars,      // suggest candidates list
        {dispMax: 10, interval: 1000}); // options
}

  window.addEventListener ?
  window.addEventListener('load', startSuggest, false) :
  window.attachEvent('onload', startSuggest);
  */
	
	$(function() {

    $("#customer_ric").autocomplete({
        url: 'ajax/search.php?output=json',
        sortFunction: function(a, b, filter) {
            var f = filter.toLowerCase();
            var fl = f.length;
            var a1 = a.value.toLowerCase().substring(0, fl) == f ? '0' : '1';
            var a1 = a1 + String(a.data[0]).toLowerCase();
            var b1 = b.value.toLowerCase().substring(0, fl) == f ? '0' : '1';
            var b1 = b1 + String(b.data[0]).toLowerCase();
            if (a1 > b1) {
                return 1;
            }
            if (a1 < b1) {
                return -1;
            }
            return 0;
        },
        showResult: function(value, data) {
            return '<span">' + value + '</span>';
        },
        onItemSelect: function(item) {
            var text = '' //You selected <b>' + item.value + '</b>';
            if (item.data.length) {
                id_cand1.value = item.data[0];
				id_cand2.value = item.data[1];
				id_cand3.value = item.data[2];
				
				//text += ' ' + item.data.join(', ') + '';
            }
            $("#last_selected").html(text);
        },
        mustMatch: true,
        maxItemsToShow: 7,
        selectFirst: false,
        autoFill: false,
        selectOnly: true,
        remoteDataType: 'json'
    });
	});
	
	$(function() {	
	
	$("#customer_ric1").autocomplete({
        url: 'ajax/searchPartito.php?output=json',
        sortFunction: function(a, b, filter) {
            var f = filter.toLowerCase();
            var fl = f.length;
            var a1 = a.value.toLowerCase().substring(0, fl) == f ? '0' : '1';
            var a1 = a1 + String(a.data[0]).toLowerCase();
            var b1 = b.value.toLowerCase().substring(0, fl) == f ? '0' : '1';
            var b1 = b1 + String(b.data[0]).toLowerCase();
            if (a1 > b1) {
                return 1;
            }
            if (a1 < b1) {
                return -1;
            }
            return 0;
        },
        showResult: function(value, data) {
            return '<span">' + value + '</span>';
        },
        onItemSelect: function(item) {
            var text = '' //You selected <b>' + item.value + '</b>';
            if (item.data.length) {
                id_part1.value = item.data[0];
				id_part2.value = item.data[1];
				id_part3.value = item.data[2];
				
				//text += ' ' + item.data.join(', ') + '';
            }
            $("#last_selected").html(text);
        },
        mustMatch: true,
        maxItemsToShow: 7,
        selectFirst: false,
        autoFill: false,
        selectOnly: true,
        remoteDataType: 'json'
    });
	
	
		 
	/*	 $(function() {
		  $('.typeahead_product').typeahead({
			  hint: true,
			  highlight: true,
			  mihLenght: 1
		  }, {
			  source: function(q, cb) {
				  return $.ajax({
					  dataType: 'json',
					  type: 'get',
					 url: '/suggest.php?typeahead_product=true&q='+q+'&limit=3',
					  chache: false,
					  success: function(data) {
						  var result = [];
						  $.each(data, function(index, val) {
							  
							  result.push({
								  value: val
							  });
						  });
						  cb(result);
						  
					  }
				  });
			  }
		  });*/
});


  </script>
<form action="candidato.php" method="post">
<div class="input-group input-group-lg">
<input type="text" id="customer_ric" required name="nameCand" class="form-control typeahead_product" placeholder="Cerca Candidato..." style="height:46px;">
<input type="text" name="id_cand1" id="id_cand1" style="display:none;">
<input type="text" name="id_cand2" id="id_cand2" style="display:none;">
<input type="text" name="id_cand3" id="id_cand3" style="display:none;">
<div class="input-group-btn">
<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
</div>
</div>
</form>

</div>
<br><br>
</div>

                        <div class="col-sm-6 clearfix push">
                            <img src="img/candidato.png" alt="" class="img-responsive pull-right visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-200" style="max-width: 450px; margin-right: -90px;">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Promo #1 -->

            

            <!-- Promo #2 -->
            <section class="site-section site-content border-bottom overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-push-6 push">
                        <br><br>
                            <h2 class="site-heading">Cerca <strong style="font-weight: 700;">Partito / Lista</strong></h2>
                            <p class="feature-text text-muted push">
                            Cerca il partito, visualizza i voti raccolti, per ogni sezione, nelle precedenti elezioni comunali (2002, 2006, 2011)
                            </p>

 <div class="col-md-12"> 
<form action="partito.php" method="post">
<div class="input-group input-group-lg">
<input type="text" id="customer_ric1" required name="namePartito" class="form-control" placeholder="Cerca Partito/Lista...">
<input type="text" name="id_part1" id="id_part1" style="display:none;">
<input type="text" name="id_part2" id="id_part2" style="display:none;">
<input type="text" name="id_part3" id="id_part3" style="display:none;">
<div class="input-group-btn">
<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
</div>
</div>
</form>
</div>
<br><br>

                            
                        </div>
                        <div class="col-sm-6 col-sm-pull-6 clearfix push">
                            <img src="img/partito.png" alt="" class="img-responsive pull-left visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-200" style="max-width: 450px; margin-left: -90px;">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Promo #2 -->

            <!-- Sign Up Action -->
            <section class="site-content site-section themed-background-muted" style="display:none;">
                <div class="container">
                    <h2 class="site-heading text-center text-dark">Iscriviti alla Newsletter e <strong style="font-weight: 700;">ricevi informazioni e promozioni</strong>.</h2>
                    <div class="site-block text-center">
                        <form action="features.html" method="post" class="form-inline" onsubmit="return false;">
                            <div class="form-group">
                                <label class="sr-only" for="register-username">Username</label>
                                <input type="text" id="register-username" name="register-username" class="form-control input-lg" placeholder="Email...">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-success">Invia!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- END Sign Up Action -->

            

            <!-- Footer -->
           <?php include "footer.php"; ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-arrow-up"></i></a>

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
     
        
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script type="text/javascript" src="js/suggest.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>