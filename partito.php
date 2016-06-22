<?php 
$flag=0;
if($_POST['id_part1'] == 0 && $_POST['id_part2'] == 0 && $_POST['id_part3'] == 0 ){
	header("location:".$site_url."index.php");
	}
if(isset($_POST['id_part1'])){
	$id_part1 = $_POST['id_part1'];
	$flag=1;
	}
if(isset($_POST['id_part2'])){
	$id_part2 = $_POST['id_part2'];
	if($flag==0){$flag=1;}
	}
if(isset($_POST['id_part3'])){
	$id_part3 = $_POST['id_part3']; 
	if($flag==0){$flag=1;}
	}
if(isset($_POST['namePartito'])){
	$name = $_POST['namePartito'];
	}

?>


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
<script>
function refreshIframe(tag){
		if(tag == '2002'){
			document.getElementById('iframe2002').contentWindow.location.reload();
			document.getElementById('chartTree2002').contentWindow.location.reload();
			}else if(tag == '2006'){
				document.getElementById('iframe2006').contentWindow.location.reload();
				document.getElementById('chartTree2006').contentWindow.location.reload();
				}else if(tag == '2011'){
					document.getElementById('iframe2011').contentWindow.location.reload();
					document.getElementById('chartTree2011').contentWindow.location.reload();
					}
	}
</script>
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
            <section class="site-section site-section-top site-section-light themed-background-dark-default" style="padding-bottom: 0px;background-color: #E2E2E2 !important;">
                <div class="container">
                    <div class="col-sm-12 col-lg-12">
<a href="javascript:void(0)" class="widget">
<div class="widget-content widget-content-mini text-right clearfix">
<div class="widget-icon pull-left themed-background-azzurro">
<i class="gi gi-user text-light-op"></i>
</div>
<h2 class="widget-heading h3">
<strong>+ <span data-toggle="counter" data-to="2862"><?php echo $name ; ?></span></strong>
</h2>
<span class="text-muted"> - </span>
</div>
</a>
</div>
                </div>
            </section>
            <!-- END Intro -->
<section class="site-content site-section border-bottom" style="background-color: #FFFFFF; padding-top: 20px;">

<!-- Contenuto -->
<div class="container" style="width: 100%; background-color: #fff;">
<div class="col-md-12" style="padding-left: 0px !important; padding-right: 0px !important;">

<div class="block full">
<div class="block-title">

<?php /*?><ul class="nav nav-tabs" data-toggle="tabs">
<li class="active"><a href="#block-tabs-2002">2002</a></li>
<li><a href="#block-tabs-2006">2006</a></li>
<li><a href="#block-tabs-2011">2011</a></li>
</ul><?php */?>

<ul class="nav nav-tabs" data-toggle="tabs">
<?php 
$var1=0;

	if($id_part1!= ""){
		if($flag == 1){
		$flag=0;$var1=1;
	?>
	<li class="active"  onClick="refreshIframe('2002')"><a href="#block-tabs-2002">2002</a></li>	
		<?php }else{ ?>
	<li  onClick="refreshIframe('2002')"><a href="#block-tabs-2002">2002</a></li>	
		<?php } }?>

<?php if($id_part2!= ""){
		if($flag == 1){
		$flag=0;$var1=2;
	?>
	<li class="active"  onClick="refreshIframe('2006')"><a href="#block-tabs-2006">2006</a></li>
	<?php }else{ ?>
	<li  onClick="refreshIframe('2006')"><a href="#block-tabs-2006">2006</a></li>
		<?php } }?>

<?php if($id_part3!= ""){
		if($flag == 1){$flag=0;$var1=3;?>
	<li class="active"  onClick="refreshIframe('2011')"><a href="#block-tabs-2011">2011</a></li>	
	<?php }else{ ?>
		<li  onClick="refreshIframe('2011')"><a href="#block-tabs-2011">2011</a></li>	
		<?php } } ?>
</ul>

</div>
<div class="tab-content">
<!-- Tab 1 -->
<?php if($id_part1!= ""){?>
<div class="tab-pane active" id="block-tabs-2002">

<?php 
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/json/?anno=2002'); 
$arrayPartito2002=json_decode($json);
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/percentuali/json/?anno=2002'); 
$arrayPartitoPercentuale2002=json_decode($json);
$totalePunteggio2002=0;
for($i = 0 ; $i<count($arrayPartito2002) ; $i++){
	$totalePunteggio2002 += $arrayPartito2002[$i]->{'totale'};
	if($arrayPartito2002[$i]->{'id'} == $id_part1){
		$votiPartito2002 = $arrayPartito2002[$i]->{'totale'};
		}
}
for($i = 0 ; $i<count($arrayPartitoPercentuale2002) ; $i++){
	
	if($arrayPartitoPercentuale2002[$i]->{'id'} == $id_part1){
		$percentualePartito2002 = $arrayPartitoPercentuale2002[$i]->{'percentuale'};
		}
}
$totalePunteggio2002 = $totalePunteggio2002 -$votiPartito2002;
?>


<div class="row">
<!-- Partito -->
<div class="col-sm-12" style="text-align: center; padding-right: 0px;">

    <h2 class="site-heading">Totale voti <strong style="font-weight: 700;">Partito / Lista</strong></h2>
    <!-- Fine Partito --> 
    <!-- voti partito -->
    <div class="col-sm-4"> <br> <br> <a href="#)" class="widget">
      <div class="widget-content themed-background-azzurro text-light-op"> <i class="fa fa-fw fa-chevron-right"></i> <strong>Voti</strong> </div>
      <div class="widget-content text-center" style="background-color: #F1F1F1;">
        <h3 class="widget-heading text-dark"><?php echo $votiPartito2002; ?></h3>
      </div>
      </a> <br> <br> <a href="#" class="widget">
      <div class="widget-content themed-background-azzurro text-light-op"> <i class="fa fa-fw fa-chevron-right"></i> <strong>Percentuale</strong> </div>
      <div class="widget-content text-center" style="background-color: #F1F1F1;">
        <h3 class="widget-heading text-dark"><?php echo number_format($percentualePartito2002, 2); ?>%</h3>
      </div>
      </a> </div>
      
      
<div class="col-sm-8">
<iframe id="iframe2002" src="chart.php?flag=partito&nomePartito=<?php echo $name ;?>&votiPartito=<?php echo $votiPartito2002 ;?>&totaleVoti=<?php echo $totalePunteggio2002 ;?>" frameborder="0" scrolling="no" style="width:100%; height:430px;"></iframe>
</div>
      
      
    <!-- fine voti partito1 --> 
  </div>
</div>




<div class="row">
<!-- Sezioni -->
<div class="col-sm-12" style="text-align: center; padding-right: 0px;">
<h2 class="site-heading" style="padding-top: 40px;">Totale voti <strong style="font-weight: 700;">per sezioni</strong></h2>
 <h4 class="site-heading " style="">(Clicca sulla sezione per mostrarla sulla mappa)</h4>
<!-- Fine Sezioni -->

<div class="col-sm-12">
<div class="table-responsive">
<iframe id="chartTree2002" src="chartThree_partito.php?id_part1=<?php echo $id_part1; ?>" frameborder="0" scrolling="no" style="width:100%; height:1045px;"></iframe>
<?php /*?><table id="general-table" class="table table-striped table-bordered table-vcenter">
<thead>
<tr>

<th style="width: 20%; text-align: center;">Sezione</th>
<th style="width: 20%; text-align: center;">Voti</th>
<th style="width: 60%; text-align: center;">Percentuale</th>

</tr>
</thead>
<tbody>
<?php $json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/json/?anno=2002&partito='.$id_part1); 
$arrayPartito2002=json_decode($json); 
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/votanti/json/?anno=2011'); 
$arrayVotiSeggio2002=json_decode($json);
?>

<?php  for($i=1; $i<84 ; $i++ ){ ?>
<?php  
if($arrayPartito2002[0]->{'s'.$i} != 0){

if($i<10){$numSeg2002 = "0".$i; }else { $numSeg2002 = $i; } ?>
<tr>

<td><strong><?php echo $numSeg2002; ?></strong></td>
<td>
<?php 
$votoTotaleSeggio2002 = $arrayVotiSeggio2002[0]->{'s'.$i};
$votoSeggio2002 = $arrayPartito2002[0]->{'s'.$i};
$percentualeSeggio2002 = $votoSeggio2002 * 100 / $votoTotaleSeggio2002;

echo $votoSeggio2002; ?>
</td>
<td>
<div class="progress progress-mini active remove-margin">

<div class="progress-bar progress-bar-striped progress-bar-blue" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentualeSeggio2002; ?>%"></div>
</div>
</td>

</tr>
<?php }} ?>
</tbody>
</table><?php */?>
</div>
</div>
</div>




</div></div>
<!-- FINE Tab 1 -->

<?php } if($id_part2 != ""){?>
<!-- Tab 2 -->
<?php  if($var1 == 2){ ?>
<div class="tab-pane active" id="block-tabs-2006">
<?php } else { ?>
<div class="tab-pane" id="block-tabs-2006">
<?php } ?>



<?php 
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/json/?anno=2006'); 
$arrayPartito2006=json_decode($json);
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/percentuali/json/?anno=2006'); 
$arrayPartitoPercentuale2006=json_decode($json);
$totalePunteggio2006=0;
for($i = 0 ; $i<count($arrayPartito2006) ; $i++){
	$totalePunteggio2006 += $arrayPartito2006[$i]->{'totale'};
	if($arrayPartito2006[$i]->{'id'} == $id_part2){
		$votiPartito2006 = $arrayPartito2006[$i]->{'totale'};
		}
}
for($i = 0 ; $i<count($arrayPartitoPercentuale2006) ; $i++){
	
	if($arrayPartitoPercentuale2006[$i]->{'id'} == $id_part2){
		$percentualePartito2006 = $arrayPartitoPercentuale2006[$i]->{'percentuale'};
		}
}
$totalePunteggio2006 = $totalePunteggio2006 - $votiPartito2006;
?>



<div class="row">
<!-- Partito -->
<div class="col-sm-12" style="text-align: center; padding-right: 0px;">

    <h2 class="site-heading">Totale voti <strong style="font-weight: 700;">Partito / Lista</strong></h2>
    <!-- Fine Partito --> 
    <!-- voti partito -->
       <div class="col-sm-4"> <br> <br> <a href="#)" class="widget">
      <div class="widget-content themed-background-azzurro text-light-op"> <i class="fa fa-fw fa-chevron-right"></i> <strong>Voti</strong> </div>
      <div class="widget-content text-center" style="background-color: #F1F1F1;">
        <h3 class="widget-heading text-dark"><?php echo $votiPartito2006; ?></h3>
      </div>
      </a> <br> <br> <a href="#" class="widget">
      <div class="widget-content themed-background-azzurro text-light-op"> <i class="fa fa-fw fa-chevron-right"></i> <strong>Percentuale</strong> </div>
      <div class="widget-content text-center" style="background-color: #F1F1F1;">
        <h3 class="widget-heading text-dark"><?php echo number_format($percentualePartito2006, 2); ?>%</h3>
      </div>
      </a> </div>
      
      
<div class="col-sm-8">
<iframe id="iframe2006" src="chart.php?flag=partito&nomePartito=<?php echo $name ;?>&votiPartito=<?php echo $votiPartito2006 ;?>&totaleVoti=<?php echo $totalePunteggio2006 ;?>" frameborder="0" scrolling="no" style="width:100%; height:430px;"></iframe>
</div>
      
      
    <!-- fine voti partito1 --> 
  </div>
</div>




<div class="row">
<!-- Sezioni -->
<div class="col-sm-12" style="text-align: center; padding-right: 0px;">
<h2 class="site-heading" style="padding-top: 40px;">Totale voti <strong style="font-weight: 700;">per sezioni</strong></h2>
 <h4 class="site-heading " style="">(Clicca sulla sezione per mostrarla sulla mappa)</h4>
<!-- Fine Sezioni -->

<div class="col-sm-12">
<div class="table-responsive">
<iframe id="chartTree2006" src="chartThree_partito.php?id_part1=<?php echo $id_part2; ?>" frameborder="0" scrolling="no" style="width:100%; height:1045px;"></iframe>
<?php /*?><table id="general-table" class="table table-striped table-bordered table-vcenter">
<thead>
<tr>

<th style="width: 20%; text-align: center;">Sezione</th>
<th style="width: 20%; text-align: center;">Voti</th>
<th style="width: 60%; text-align: center;">Percentuale</th>

</tr>
</thead>
<tbody>
<?php $json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/json/?anno=2006&partito='.$id_part2); 
$arrayPartito2006=json_decode($json); 
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/votanti/json/?anno=2006'); 
$arrayVotiSeggio2006=json_decode($json);
?>

<?php  for($i=1; $i<84 ; $i++ ){ ?>
<?php  
if($arrayPartito2006[0]->{'s'.$i} != 0){

if($i<10){$numSeg2006 = "0".$i; }else { $numSeg2006 = $i; } ?>
<tr>

<td><strong><?php echo $numSeg2006; ?></strong></td>
<td>
<?php 
$votoTotaleSeggio2006 = $arrayVotiSeggio2006[0]->{'s'.$i};
$votoSeggio2006 = $arrayPartito2006[0]->{'s'.$i};
$percentualeSeggio2006 = $votoSeggio2006 * 100 / $votoTotaleSeggio2006;

echo $votoSeggio2006; ?>
</td>
<td>
<div class="progress progress-mini active remove-margin">

<div class="progress-bar progress-bar-striped progress-bar-blue" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentualeSeggio2006; ?>%"></div>
</div>
</td>

</tr>
<?php }} ?>
</tbody>
</table><?php */?>
</div>
</div>
</div>




</div>




</div>
<!-- FINE Tab 2 -->

<?php }if($id_part3 != ""){?>
<!-- Tab 3 -->
<?php  if($var1 == 3){ ?>
<div class="tab-pane active" id="block-tabs-2011">
<?php } else { ?>
<div class="tab-pane" id="block-tabs-2011">
<?php } ?>


<?php 
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/json/?anno=2011'); 
$arrayPartito2011=json_decode($json);
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/percentuali/json/?anno=2011'); 
$arrayPartitoPercentuale2011=json_decode($json);

$totalePunteggio2011=0;
for($i = 0 ; $i<count($arrayPartito2011) ; $i++){
	$totalePunteggio2011 += $arrayPartito2011[$i]->{'totale'};
	if($arrayPartito2011[$i]->{'id'} == $id_part3){
		$votiPartito2011 = $arrayPartito2011[$i]->{'totale'};
		}
}
for($i = 0 ; $i<count($arrayPartitoPercentuale2011) ; $i++){
	
	if($arrayPartitoPercentuale2011[$i]->{'id'} == $id_part3){
		$percentualePartito2011 = $arrayPartitoPercentuale2011[$i]->{'percentuale'};
		}
}
$totalePunteggio2011 = $totalePunteggio2011 - $votiPartito2011;


?>


<div class="row">
<!-- Partito -->
<div class="col-sm-12" style="text-align: center; padding-right: 0px;">

    <h2 class="site-heading">Totale voti <strong style="font-weight: 700;">Partito / Lista</strong></h2>
    <!-- Fine Partito --> 
    <!-- voti partito -->
    <div class="col-sm-4"> <br> <br> <a href="#)" class="widget">
      <div class="widget-content themed-background-azzurro text-light-op"> <i class="fa fa-fw fa-chevron-right"></i> <strong>Voti</strong> </div>
      <div class="widget-content text-center" style="background-color: #F1F1F1;">
        <h3 class="widget-heading text-dark"><?php echo $votiPartito2011; ?></h3>
      </div>
      </a> <br> <br> <a href="#" class="widget">
      <div class="widget-content themed-background-azzurro text-light-op"> <i class="fa fa-fw fa-chevron-right"></i> <strong>Percentuale</strong> </div>
      <div class="widget-content text-center" style="background-color: #F1F1F1;">
        <h3 class="widget-heading text-dark"><?php echo number_format($percentualePartito2011, 2); ?>%</h3>
      </div>
      </a> </div>
      
<div class="col-sm-8">
<iframe id="iframe2011" src="chart.php?flag=partito&nomePartito=<?php echo $name ;?>&votiPartito=<?php echo $votiPartito2011 ;?>&totaleVoti=<?php echo $totalePunteggio2011 ;?>" frameborder="0" scrolling="no" style="width:100%; height:430px;"></iframe>
</div>
      
    <!-- fine voti partito1 --> 
  </div>
</div>




<div class="row">
<!-- Sezioni -->
<div class="col-sm-12" style="text-align: center; padding-right: 0px;">
<h2 class="site-heading" style="padding-top: 40px;">Totale voti <strong style="font-weight: 700;">per sezioni</strong></h2>
 <h4 class="site-heading " style="">(Clicca sulla sezione per mostrarla sulla mappa)</h4>
<!-- Fine Sezioni -->

<div class="col-sm-12">
<div class="table-responsive">
<iframe id="chartTree2011" src="chartThree_partito.php?id_part3=<?php echo $id_part3; ?>" frameborder="0" scrolling="no" style="width:100%; height:1045px;"></iframe>
<?php /*?><table id="general-table" class="table table-striped table-bordered table-vcenter">
<thead>
<tr>

<th style="width: 20%; text-align: center;">Sezione</th>
<th style="width: 20%; text-align: center;">Voti</th>
<th style="width: 60%; text-align: center;">Percentuale</th>

</tr>
</thead>
<tbody>
<?php $json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/json/?anno=2011&partito='.$id_part3); 
$arrayPartito2011=json_decode($json); 
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/votanti/json/?anno=2011'); 
$arrayVotiSeggio2011=json_decode($json);
?>

<?php  for($i=1; $i<84 ; $i++ ){ ?>
<?php  
if($arrayPartito2011[0]->{'s'.$i} != 0){

if($i<10){$numSeg2011 = "0".$i; }else { $numSeg2011 = $i; } ?>
<tr>

<td><strong><?php echo $numSeg2011; ?></strong></td>
<td>
<?php 
$votoTotaleSeggio2011 = $arrayVotiSeggio2011[0]->{'s'.$i};
$votoSeggio2011 = $arrayPartito2011[0]->{'s'.$i};
$percentualeSeggio2011 = $votoSeggio2011 * 100 / $votoTotaleSeggio2011;

echo $votoSeggio2011; ?>
</td>
<td>
<div class="progress progress-mini active remove-margin">

<div class="progress-bar progress-bar-striped progress-bar-blue" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentualeSeggio2011; ?>%"></div>
</div>
</td>

</tr>
<?php } } ?>
</tbody>
</table><?php */?>
</div>
</div>
</div>




</div>




</div>
<!-- FINE Tab 3 -->
<?php } ?>
</div>
</div>
</div>

</div>

<!-- Fine contenuto -->

</section>

            

            

            

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

<!-- Load and execute javascript code used only in this page --> 
<script src="js/pages/uiWidgets.js"></script> 
<script>$(function(){ UiWidgets.init(); });</script>


    </body>
</html>