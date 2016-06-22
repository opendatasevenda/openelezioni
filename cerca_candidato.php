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
    
<script>
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
        maxItemsToShow: 10,
        selectFirst: false,
        autoFill: false,
        selectOnly: true,
        remoteDataType: 'json'
    });
    });

</script>
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
                    <h1 class="text-center animation-fadeInQuickInv" style="color: #8A8A8A;">Cerca <strong style="font-weight: 700;"> Candidato.</strong></h1>
                </div>
            </section>
            <!-- END Intro -->

<!-- Promo #1 -->
            <section class="site-section site-content border-bottom overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 push">
                        <br><br>
                            <h2 class="site-heading">Cerca <strong style="font-weight: 700;">Candidato</strong></h2>
                            <p class="feature-text text-muted push">
                            Cerca il nome di un candidato nelle passate lezioni comunali (2002, 2006, 2011) consulta le preferenze raccolte dai candidati per ogni sezione elettorale.</p>
                            

 <div class="col-md-12">                          

<form action="candidato.php" method="post">
<div class="input-group input-group-lg">
<input type="text" id="customer_ric" name="nameCand" class="form-control typeahead_product" placeholder="Cerca Candidato..." style="height:46px;">
<input type="text" name="id_cand1" id="id_cand1" style="display:none;">
<input type="text" name="id_cand2" id="id_cand2" style="display:none;">
<input type="text" name="id_cand3" id="id_cand3" style="display:none;">
<div class="input-group-btn">
<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
</div>
</div>
</form>
</div>


                            
                        </div>
                        <div class="col-sm-4 clearfix push">
                            <img src="img/candidato.png" alt="" class="img-responsive pull-right visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-200" style="max-width: 450px; margin-right: -90px;">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Promo #1 -->

            

            

            

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