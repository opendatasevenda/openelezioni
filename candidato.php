<?php 
$flag=0;
if($_POST['id_cand1'] == 0 && $_POST['id_cand2'] == 0 && $_POST['id_cand3'] == 0 ){
	header("location:".$site_url."index.php");
	}
if(isset($_POST['id_cand1'])){
	$cand1 = $_POST['id_cand1'];
	$flag=1;
	}
if(isset($_POST['id_cand2'])){
	$cand2 = $_POST['id_cand2'];
	if($flag==0){$flag=1;}
	}
if(isset($_POST['id_cand3'])){
	$cand3 = $_POST['id_cand3']; 
	if($flag==0){$flag=1;}
	}
if(isset($_POST['nameCand'])){
	$name = $_POST['nameCand'];
	}



?>
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
<script>
function refreshIframe(tag){
		if(tag == '2002'){
			//document.getElementById('iframe20021').contentWindow.location.reload();
			document.getElementById('iframe20022').contentWindow.location.reload();
			document.getElementById('chartTree2002').contentWindow.location.reload();
			}else if(tag == '2006'){
				//document.getElementById('iframe20061').contentWindow.location.reload();
				document.getElementById('iframe20062').contentWindow.location.reload();
				document.getElementById('chartTree2006').contentWindow.location.reload();
				}else if(tag == '2011'){
					//document.getElementById('iframe20111').contentWindow.location.reload();
					document.getElementById('iframe20112').contentWindow.location.reload();
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
  <?php include "header.php" ; ?>
  <!-- END Site Header --> 
  
  <!-- Intro -->
  <section class="site-section site-section-top site-section-light themed-background-dark-default" style="padding-bottom: 0px;background-color: #E2E2E2 !important">
    <div class="container">
      <?php /*?><div class="col-sm-12 col-lg-12"> <a href="javascript:void(0)" class="widget">
        <div class="widget-content widget-content-mini text-right clearfix">
          <div class="widget-icon pull-left themed-background-azzurro"> <i class="gi gi-user text-light-op"></i> </div>
          <h2 class="widget-heading h3"> <strong>+ <span data-toggle="counter" data-to="2862"><?php echo $name; ?></span></strong> </h2>
        </div>
        </a> </div><?php */?>
       <div class="col-sm-12 col-lg-12"> <a href="javascript:void(0)" class="">
        <div class="" style="margin-left: 21%;margin-bottom: 25px;">
          <h2 class="widget-heading "> <span data-toggle="counter" data-to="2862">Candidato al consiglio comunale: <strong><?php echo $name; ?></strong> </h2>
        </div>
        </a> </div> 
       
       
    </div>
  </section>
  <!-- END Intro -->
  <section class="site-content site-section border-bottom" style="background-color: #FFFFFF; padding-top: 20px;"> 
    
    <!-- Contenuto -->
    <div class="container" style="width: 100%; background-color: #fff;">
      <div class="col-md-12" style="padding-left: 0px !important; padding-right: 0px !important;">
        <div class="block full">
          <div class="block-title">
            <ul class="nav nav-tabs" data-toggle="tabs">
              <?php 
$var1=0;

	if($cand1!= ""){
		if($flag == 1){
		$flag=0;$var1=1;
	?>
              <li class="active" onClick="refreshIframe('2002')"><a href="#block-tabs-2002"><strong>Anno 2002</strong></a></li>
              <?php }else{ ?>
              <li onClick="refreshIframe('2002')"><a href="#block-tabs-2002"><strong>Anno 2002</strong></a></li>
              <?php } }?>
              <?php if($cand2!= ""){
		if($flag == 1){
		$flag=0;$var1=2;
	?>
              <li class="active" onClick="refreshIframe('2006')"><a href="#block-tabs-2006"><strong>Anno 2006</strong></a></li>
              <?php }else{ ?>
              <li onClick="refreshIframe('2006')"><a href="#block-tabs-2006"><strong>Anno 2006</strong></a></li>
              <?php } }?>
              <?php if($cand3!= ""){
		if($flag == 1){$flag=0;$var1=3;?>
              <li class="active" onClick="refreshIframe('2011')"><a href="#block-tabs-2011"><strong>Anno 2011</strong></a></li>
              <?php }else{ ?>
              <li onClick="refreshIframe('2011')"><a href="#block-tabs-2011"><strong>Anno 2011</strong></a></li>
              <?php } } ?>
            </ul>
          </div>
          <div class="tab-content">
            <?php if($cand1!= ""){?>
            
            <!-- Tab 1 -->
            <div class="tab-pane active" id="block-tabs-2002">
              <?php 
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/candidati/risultati/json/?id='.$cand1.'&anno=2002'); 
$arrayVoti2002=json_decode($json);
$idPartito2002 = $arrayVoti2002[0]->{'partito'};
$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/sindaco/json/?anno=2002&partito='.$idPartito2002); 
$arraySindaco2002=json_decode($json);
$idSindaco2002 = $arraySindaco2002[0]->{'id'};
$nomeSindaco2002 = $arraySindaco2002[0]->{'sindaco'};
$votiSindaco2002 = $arraySindaco2002[0]->{'voti'};
$eletto2002 = 0;
if($nomeSindaco2002 == 'FALCO LUIGI'){
	$eletto2002=1;
}

$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/json/?anno=2002'); 
$arrayPartito2002=json_decode($json);
$totalePunteggio2002 =  0;
for($i = 0 ; $i<count($arrayPartito2002) ; $i++){
	$totalePunteggio2002 += $arrayPartito2002[$i]->{'totale'};
	if($arrayPartito2002[$i]->{'id'} == $idPartito2002){
		$nomePartito2002 = $arrayPartito2002[$i]->{'nome'};
		
		}
}
$votiCandidato2002 = $arrayVoti2002[0]->{'totale'};


$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/percentuali/json/?anno=2002&id='.$idPartito2002.''); 
$arrayDataPartito2002=json_decode($json);
$percentualePartito2002 = $arrayDataPartito2002[0]->{'percentuale'};
$votiPartito2002 = $arrayDataPartito2002[0]->{'totale'};
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/votanti/json/?anno=2002'); 
$arrayVotiSeggio2002=json_decode($json);
$totalePunteggio2002 = $totalePunteggio2002 -$votiPartito2002;

?>
<?php /*?>              <div class="row"> 
                <!-- Partito -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                  <?php /*?><h2 class="site-heading" style=" padding-top: 40px;">Totale voti <strong style="font-weight: 700;">Candidato</strong></h2>	
                  <!-- Fine Partito --> 
                  <!-- voti partito -->
                  <div class="col-sm-4"> <br>
                    <a href="#)" class="widget">
                    <div class="widget-content themed-background-rosa text-light-op"> <i class="fa fa-fw fa-chevron-right"></i> <strong>Voti</strong> </div>
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"> <?php echo $votiCandidato2002; ?></h3>
                    </div>
                    </a> </div>
                  <div class="col-sm-8">
                    <iframe id="iframe20021" src="chart.php?flag=candidato&nomeCandidato=<?php echo $name;?>&votiCandidato=<?php echo $votiCandidato2002 ;?>&votiPartito=<?php echo $votiPartito2002-$votiCandidato2002;?>&nomepartito=<?php echo $nomePartito2002; ?>" frameborder="0" scrolling="no" style="width:100%; height:430px;"></iframe>
                  </div>
                  
                  <!-- fine voti partito1 --> 
                </div>
              </div>
              <hr><?php */?>
              <div class="row"> 
                <!-- Partito -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                 <?php /*?> <h2 class="site-heading"><strong style="font-weight: 700;"> <?php echo $nomePartito2002; ?> </strong></h2>
                  <br><?php */?>
                 <?php /*?> <h2 class="site-heading">Totale voti <strong style="font-weight: 700;">Partito / Lista</strong></h2><?php */?>
                  <!-- Fine Partito --> 
                  <!-- voti partito -->
                  <div class="col-sm-4">
                    <a href="#" class="widget">
                    <div class="widget-content themed-background-rosa text-light-op" style="text-transform:uppercase" > <i class="fa fa-fw fa-chevron-right"></i> Voti <span style="font-weight:900;"> <?php echo $name; ?></span> </div>
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"><?php echo number_format($votiCandidato2002); ?></h3>
                    </div>
                    </a></div>
                     <div class="col-sm-4">
                    <a href="#" class="widget">
                    <div class="widget-content themed-background-azzurro text-light-op" style="text-transform:uppercase"> <i class="fa fa-fw fa-chevron-right"></i> Voti <strong> <?php echo $nomePartito2002; ?></strong> </div> 
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"><strong><?php echo number_format($votiPartito2002);;?></strong>&nbsp;&nbsp; | &nbsp;&nbsp;<strong><?php echo number_format($percentualePartito2002, 2)." %"; ?></strong></h3>
                    </div>
                    </a></div>
                    <div class="col-sm-4">
                    <a href="#" class="widget">
                    <div class="widget-content themed-background-azzurro text-light-op" style="text-transform:uppercase"> <i class="fa fa-fw fa-chevron-right"></i> Voti Candidato sindaco <strong> <?php echo $nomeSindaco2002; ?></strong> </div>
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"><?php echo number_format($votiSindaco2002); ?>&nbsp;&nbsp; | &nbsp;&nbsp;
                      <?php if($eletto2002 == 1){ echo "<span style='color:green'>ELETTO</span>"; } 
					  else{ echo "<span style='color:red'>NON ELETTO</span>"; }?></h3>
                    </div>
                    </a> </div>
            <?php /*?>      <div class="col-sm-8">
                  
                  </div><?php */?>
                  
                  <!-- fine voti partito1 --> 
                </div>
              </div>
              
              <div class="row"> 
                <!-- Sezioni -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                  <iframe id="iframe20022" src="chart2.php?nomePartito=<?php echo $nomePartito2002 ;?>&annoPartito=2002" frameborder="0" scrolling="no" style="width:100%; height:655px;"></iframe>
                </div></div>
              <div class="row"> 
                <!-- Sezioni -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                  <h2 class="site-heading" style="padding-top: 40px;">Totale voti <strong style="font-weight: 700;"> <?php echo $name;?> </strong> per sezioni</h2>  <h4 class="site-heading " style="">(Clicca sulla sezione per mostrarla sulla mappa)</h4>
                  <!-- Fine Sezioni -->
                  
                  <div class="col-sm-12">
                    <div class="table-responsive">
                      <iframe id="chartTree2002" src="chartThree.php?id1=<?php echo $cand1; ?>" frameborder="0" scrolling="no" style="width:100%; height:1045px;"></iframe>
                      <br>
                      <br>
                      <?php /*?><table id="general-table" class="table table-striped table-bordered table-vcenter">
<thead>
<tr>

<th style="width: 10%; text-align: center;">Sezione</th>
<th style="width: 20%; text-align: center;">Voti</th>
<th style="width: 50%; text-align: center;">Percentuale</th>
<th style="width: 20%; text-align: center;">Sezione</th>
</tr>
</thead>
<tbody>

<?php  for($i=1; $i<84 ; $i++ ){ ?>
<?php  
if($arrayVoti2002[0]->{'s'.$i} != 0){

if($i<10){$numSeg2002 = "0".$i; }else { $numSeg2002 = $i; } ?>
<tr>

<td><strong><?php echo $numSeg2002; ?></strong></td>
<td>
<?php 
$votoTotaleSeggio2002 = $arrayVotiSeggio2002[0]->{'s'.$i};
$votoSeggio2002 = $arrayVoti2002[0]->{'s'.$i}; 
$percentualeSeggio2002 = $votoSeggio2002 * 100 / $votoTotaleSeggio2002 ;
echo $votoSeggio2002." voti su ".$votiCandidato2002.""; ?>
</td>
<td>
<div class="progress progress-mini active remove-margin">

<div class="progress-bar progress-bar-striped progress-bar-rosa" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentualeSeggio2002; ?>%"></div>
</div>
</td>
<td>
<?php  echo number_format($percentualeSeggio2002, 2).' % del totale'; ?>
</td>
</tr>
<?php }  } ?>
<tr>
</tbody>
</table><?php */?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FINE Tab 1 -->
            <?php }if($cand2 != ""){?>
            <!-- Tab 2 -->
            <?php  if($var1 == 2){ ?>
            <div class="tab-pane active" id="block-tabs-2006">
              <?php } else { ?>
              <div class="tab-pane" id="block-tabs-2006">
                <?php }
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/candidati/risultati/json/?id='.$cand2.'&anno=2006'); 
$arrayVoti2006=json_decode($json);
$idPartito2006 = $arrayVoti2006[0]->{'partito'};
$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/sindaco/json/?anno=2006&partito='.$idPartito2006); 
$arraySindaco2006=json_decode($json);
$idSindaco2006 = $arraySindaco2006[0]->{'id'};
$nomeSindaco2006 = $arraySindaco2006[0]->{'sindaco'};
$votiSindaco2006 = $arraySindaco2006[0]->{'voti'};
$eletto2006 = 0;
if($nomeSindaco2006 == 'PETTERUTI NICODEMO'){
	$eletto2006=1;
}


$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/json/?anno=2006'); 
$arrayPartito2006=json_decode($json);
$totalePunteggio2006 =  0;
for($i = 0 ; $i<count($arrayPartito2006) ; $i++){
	$totalePunteggio2006 += $arrayPartito2006[$i]->{'totale'};
	if($arrayPartito2006[$i]->{'id'} == $idPartito2006){
		$nomePartito2006 = $arrayPartito2006[$i]->{'nome'};
		
		}
}
$votiCandidato2006 = $arrayVoti2006[0]->{'totale'};


$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/percentuali/json/?anno=2006&id='.$idPartito2006.''); 
$arrayDataPartito2006=json_decode($json);
$percentualePartito2006 = $arrayDataPartito2006[0]->{'percentuale'};
$votiPartito2006 = $arrayDataPartito2006[0]->{'totale'};
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/votanti/json/?anno=2006'); 
$arrayVotiSeggio2006=json_decode($json);
$totalePunteggio2006 = $totalePunteggio2006 -$votiPartito2006;

?>
<?php /*?>              <div class="row"> 
                <!-- Partito -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                  <?php /*?><h2 class="site-heading" style=" padding-top: 40px;">Totale voti <strong style="font-weight: 700;">Candidato</strong></h2>	
                  <!-- Fine Partito --> 
                  <!-- voti partito -->
                  <div class="col-sm-4"> <br>
                    <a href="#)" class="widget">
                    <div class="widget-content themed-background-rosa text-light-op"> <i class="fa fa-fw fa-chevron-right"></i> <strong>Voti</strong> </div>
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"> <?php echo $votiCandidato2006; ?></h3>
                    </div>
                    </a> </div>
                  <div class="col-sm-8">
                    <iframe id="iframe20061" src="chart.php?flag=candidato&nomeCandidato=<?php echo $name;?>&votiCandidato=<?php echo $votiCandidato2006 ;?>&votiPartito=<?php echo $votiPartito2006-$votiCandidato2006;?>&nomepartito=<?php echo $nomePartito2006; ?>" frameborder="0" scrolling="no" style="width:100%; height:430px;"></iframe>
                  </div>
                  
                  <!-- fine voti partito1 --> 
                </div>
              </div>
              <hr><?php */?>
              <div class="row"> 
                <!-- Partito -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                 <?php /*?> <h2 class="site-heading"><strong style="font-weight: 700;"> <?php echo $nomePartito2006; ?> </strong></h2>
                  <br><?php */?>
                 <?php /*?> <h2 class="site-heading">Totale voti <strong style="font-weight: 700;">Partito / Lista</strong></h2><?php */?>
                  <!-- Fine Partito --> 
                  <!-- voti partito -->
                  <div class="col-sm-4">
                    <a href="#" class="widget">
                    <div class="widget-content themed-background-rosa text-light-op" style="text-transform:uppercase" > <i class="fa fa-fw fa-chevron-right"></i> Voti <span style="font-weight:900;"> <?php echo $name; ?></span> </div>
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"><?php echo number_format($votiCandidato2006); ?></h3>
                    </div>
                    </a></div>
                     <div class="col-sm-4">
                    <a href="#" class="widget">
                    <div class="widget-content themed-background-azzurro text-light-op" style="text-transform:uppercase"> <i class="fa fa-fw fa-chevron-right"></i> Voti <strong> <?php echo $nomePartito2006; ?></strong> </div> 
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"><strong><?php echo number_format($votiPartito2006);;?></strong>&nbsp;&nbsp; | &nbsp;&nbsp;<strong><?php echo number_format($percentualePartito2006, 2)." %"; ?></strong></h3>
                    </div>
                    </a></div>
                    <div class="col-sm-4">
                    <a href="#" class="widget">
                    <div class="widget-content themed-background-azzurro text-light-op" style="text-transform:uppercase"> <i class="fa fa-fw fa-chevron-right"></i> Voti Candidato sindaco <strong> <?php echo $nomeSindaco2006; ?></strong> </div>
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"><?php echo number_format($votiSindaco2006); ?>&nbsp;&nbsp; | &nbsp;&nbsp;
                      <?php if($eletto2006 == 1){ echo "<span style='color:green'>ELETTO</span>"; } 
					  else{ echo "<span style='color:red'>NON ELETTO</span>"; }?></h3>
                    </div>
                    </a> </div>
            <?php /*?>      <div class="col-sm-8">
                  
                  </div><?php */?>
                  
                  <!-- fine voti partito1 --> 
                </div>
              </div>
              
              <div class="row"> 
                <!-- Sezioni -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                  <iframe id="iframe20062" src="chart2.php?nomePartito=<?php echo $nomePartito2006 ;?>&annoPartito=2006" frameborder="0" scrolling="no" style="width:100%; height:655px;"></iframe>
                </div></div>
              <div class="row"> 
                <!-- Sezioni -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                  <h2 class="site-heading" style="padding-top: 40px;">Totale voti <strong style="font-weight: 700;"> <?php echo $name; ?> </strong> per sezioni</h2>  <h4 class="site-heading " style="">(Clicca sulla sezione per mostrarla sulla mappa)</h4>
                  <!-- Fine Sezioni -->
                  
                  <div class="col-sm-12">
                    <div class="table-responsive">
                    
                      <iframe id="chartTree2006" src="chartThree.php?id2=<?php echo $cand2; ?>" frameborder="0" scrolling="no" style="width:100%; height:1045px;"></iframe>
                      <br>
                      <br>
                        <?php /*?><table id="general-table" class="table table-striped table-bordered table-vcenter">
<thead>
<tr>

<th style="width: 10%; text-align: center;">Sezione</th>
<th style="width: 20%; text-align: center;">Voti</th>
<th style="width: 50%; text-align: center;">Percentuale</th>
<th style="width: 20%; text-align: center;">Sezione</th>

</tr>
</thead>
<tbody>

<?php  for($i=1; $i<90 ; $i++ ){ ?>


<?php  
if($arrayVoti2006[0]->{'s'.$i} != 0){
if($i<10){$numSeg2006 = "0".$i; }else { $numSeg2006 = $i; } ?>
<tr>
<td><strong><?php echo $numSeg2006; ?></strong></td>
<td>
<?php 
$votoTotaleSeggio2006 = $arrayVotiSeggio2006[0]->{'s'.$i};
$votoSeggio2006 = $arrayVoti2006[0]->{'s'.$i}; 
$percentualeSeggio2006 = $votoSeggio2006 * 100 / $votoTotaleSeggio2006 ;
echo $votoSeggio2006." voti su ".$votiCandidato2006; ?>
</td>
<td>
<div class="progress progress-mini active remove-margin">

<div class="progress-bar progress-bar-striped progress-bar-rosa" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentualeSeggio2006; ?>%"></div>
</div>
</td>
<td>
<?php  echo number_format($percentualeSeggio2006, 2).' % del totale'; ?>
</td>
</tr>
<tr>
<?php }  } ?>
</tbody>
</table><?php */?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- FINE Tab 2 -->
              <?php }
if($cand3 != ""){?>
              <!-- Tab 3 -->
              <?php  if($var1 == 3){ ?>
              <div class="tab-pane active" id="block-tabs-2011">
                <?php } else { ?>
                <div class="tab-pane" id="block-tabs-2011">
                  <?php }
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/candidati/risultati/json/?id='.$cand3.'&anno=2011'); 
$arrayVoti2011=json_decode($json);
$idPartito2011 = $arrayVoti2011[0]->{'partito'};
$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/sindaco/json/?anno=2011&partito='.$idPartito2011); 
$arraySindaco2011=json_decode($json);
$idSindaco2011 = $arraySindaco2011[0]->{'id'};
$nomeSindaco2011 = $arraySindaco2011[0]->{'sindaco'};
$votiSindaco2011 = $arraySindaco2011[0]->{'voti'};
$eletto2011 = 0;
if($nomeSindaco2011 == 'DEL GAUDIO PIO'){
	$eletto2011=1;
}

$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/json/?anno=2011'); 
$arrayPartito2011=json_decode($json);
$totalePunteggio2011 =  0;
for($i = 0 ; $i<count($arrayPartito2011) ; $i++){
	$totalePunteggio2011 += $arrayPartito2011[$i]->{'totale'};
	if($arrayPartito2011[$i]->{'id'} == $idPartito2011){
		$nomePartito2011 = $arrayPartito2011[$i]->{'nome'};
		
		}
}
$votiCandidato2011 = $arrayVoti2011[0]->{'totale'};


$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/percentuali/json/?anno=2011&id='.$idPartito2011.''); 
$arrayDataPartito2011=json_decode($json);
$percentualePartito2011 = $arrayDataPartito2011[0]->{'percentuale'};
$votiPartito2011 = $arrayDataPartito2011[0]->{'totale'};
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/votanti/json/?anno=2011'); 
$arrayVotiSeggio2011=json_decode($json);
$totalePunteggio2011 = $totalePunteggio2011 -$votiPartito2011;

?>
<?php /*?>              <div class="row"> 
                <!-- Partito -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                  <?php /*?><h2 class="site-heading" style=" padding-top: 40px;">Totale voti <strong style="font-weight: 700;">Candidato</strong></h2>	
                  <!-- Fine Partito --> 
                  <!-- voti partito -->
                  <div class="col-sm-4"> <br>
                    <a href="#)" class="widget">
                    <div class="widget-content themed-background-rosa text-light-op"> <i class="fa fa-fw fa-chevron-right"></i> <strong>Voti</strong> </div>
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"> <?php echo $votiCandidato2011; ?></h3>
                    </div>
                    </a> </div>
                  <div class="col-sm-8">
                    <iframe id="iframe20111" src="chart.php?flag=candidato&nomeCandidato=<?php echo $name;?>&votiCandidato=<?php echo $votiCandidato2011 ;?>&votiPartito=<?php echo $votiPartito2011-$votiCandidato2011;?>&nomepartito=<?php echo $nomePartito2011; ?>" frameborder="0" scrolling="no" style="width:100%; height:430px;"></iframe>
                  </div>
                  
                  <!-- fine voti partito1 --> 
                </div>
              </div>
              <hr><?php */?>
              <div class="row"> 
                <!-- Partito -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                 <?php /*?> <h2 class="site-heading"><strong style="font-weight: 700;"> <?php echo $nomePartito2011; ?> </strong></h2>
                  <br><?php */?>
                 <?php /*?> <h2 class="site-heading">Totale voti <strong style="font-weight: 700;">Partito / Lista</strong></h2><?php */?>
                  <!-- Fine Partito --> 
                  <!-- voti partito -->
                  <div class="col-sm-4">
                    <a href="#" class="widget">
                    <div class="widget-content themed-background-rosa text-light-op" style="text-transform:uppercase" > <i class="fa fa-fw fa-chevron-right"></i> Voti <span style="font-weight:900;"> <?php echo $name; ?></span> </div>
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"><?php echo number_format($votiCandidato2011); ?></h3>
                    </div>
                    </a></div>
                     <div class="col-sm-4">
                    <a href="#" class="widget">
                    <div class="widget-content themed-background-azzurro text-light-op" style="text-transform:uppercase"> <i class="fa fa-fw fa-chevron-right"></i> Voti <strong> <?php echo $nomePartito2011; ?></strong> </div> 
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"><strong><?php echo number_format($votiPartito2011);;?></strong>&nbsp;&nbsp; | &nbsp;&nbsp;<strong><?php echo number_format($percentualePartito2011, 2)." %"; ?></strong></h3>
                    </div>
                    </a></div>
                    <div class="col-sm-4">
                    <a href="#" class="widget">
                    <div class="widget-content themed-background-azzurro text-light-op" style="text-transform:uppercase"> <i class="fa fa-fw fa-chevron-right"></i> Voti Candidato sindaco <strong> <?php echo $nomeSindaco2011; ?></strong> </div>
                    <div class="widget-content text-center" style="background-color: #F1F1F1;">
                      <h3 class="widget-heading text-dark"><?php echo number_format($votiSindaco2011); ?>&nbsp;&nbsp; | &nbsp;&nbsp;
                      <?php if($eletto2011 == 1){ echo "<span style='color:green'>ELETTO</span>"; } 
					  else{ echo "<span style='color:red'>NON ELETTO</span>"; }?></h3>
                    </div>
                    </a> </div>
            <?php /*?>      <div class="col-sm-8">
                  
                  </div><?php */?>
                  
                  <!-- fine voti partito1 --> 
                </div>
              </div>
              
              <div class="row"> 
                <!-- Sezioni -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                  <iframe id="iframe20112" src="chart2.php?nomePartito=<?php echo $nomePartito2011 ;?>&annoPartito=2011" frameborder="0" scrolling="no" style="width:100%; height:655px;"></iframe>
                </div></div>
              <div class="row"> 
                <!-- Sezioni -->
                <div class="col-sm-12" style="text-align: center; padding-right: 0px;">
                  <h2 class="site-heading" style="padding-top: 40px;">Totale voti <strong style="font-weight: 700;"> <?php echo $name;; ?> </strong> per sezioni</h2>  <h4 class="site-heading " style="">(Clicca sulla sezione per mostrarla sulla mappa)</h4>
                  <!-- Fine Sezioni -->
                  
                  <div class="col-sm-12">
                    <div class="table-responsive">
                    
                      <iframe id="chartTree2011" src="chartThree.php?id3=<?php echo $cand3; ?>" frameborder="0" scrolling="no" style="width:100%; height:1045px;"></iframe>
                      <br>
                      <br>
                          <?php /*?><table id="general-table" class="table table-striped table-bordered table-vcenter">
<thead>
<tr>

<th style="width: 10%; text-align: center;">Sezione</th>
<th style="width: 20%; text-align: center;">Voti</th>
<th style="width: 50%; text-align: center;">Percentuale</th>
<th style="width: 20%; text-align: center;">Sezione</th>

</tr>
</thead>
<tbody>

<?php  for($i=1; $i<90 ; $i++ ){ ?>


<?php  
if($arrayVoti2011[0]->{'s'.$i} != 0){
if($i<10){$numSeg2011 = "0".$i; }else { $numSeg2011 = $i; } ?>
<tr>

<td><strong><?php echo $numSeg2011; ?></strong></td>
<td>
<?php 
$votoTotaleSeggio2011 = $arrayVotiSeggio2011[0]->{'s'.$i};
$votoSeggio2011 = $arrayVoti2011[0]->{'s'.$i}; 
$percentualeSeggio2011 = $votoSeggio2011 * 100 / $votoTotaleSeggio2011 ;
echo $votoSeggio2011." voti su ".$votiCandidato2011; ?>
</td>
<td>
<div class="progress progress-mini active remove-margin">

<div class="progress-bar progress-bar-striped progress-bar-rosa" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentualeSeggio2011; ?>%"></div>
</div>
</td>
<td>
<?php  echo number_format($percentualeSeggio2011, 2).' % del totale'; ?>
</td>
</tr>
<tr>
<?php }  } ?>
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