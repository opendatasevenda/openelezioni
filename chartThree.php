<!doctype html>
<html>
  <head>
<link rel="stylesheet" href="map/3dparty/leaflet/css/leaflet.css" />
<link rel="stylesheet" href="http://bootswatch.com/lumen/bootstrap.min.css" />
<link rel="stylesheet" href="map/3dparty/EasyAutocomplete/easy-autocomplete.min.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="map/css/app.css">

<style>
.label {
	color:#000;
}

</style>
<?php 

if(isset($_GET['id1']) && $_GET['id1'] != ''){
	$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/candidati/risultati/json/?id='.$_GET['id1'].'&anno=2002'); 
$arrayVoti2002=json_decode($json);
	$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/spatial/'); 
$arraySpatial2002=json_decode($json);
$idSeggio2002 = 0;

?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['treemap']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)','idSezione'],
          ['Sezioni', null,0,0,0],
	<?php for($i=1; $i<84 ; $i++ ){  /* */
		for($y=0;$y<count($arraySpatial2002->{'features'});$y++){
			if($i==$arraySpatial2002->{'features'}[$y]->{'properties'}->{'sezione'}){
				$idSeggio2002 = $arraySpatial2002->{'features'}[$y]->{'properties'}->{'id'};
				}
		}
		$votoSeggio2002 = $arrayVoti2002[0]->{'s'.$i}; 
			if($i<10){$numSeg2002 = "0".$i; }else { $numSeg2002 = $i; } ?> 
		<?php if($i != 83){ ?>
          	[' <?php echo $numSeg2002;?>','Sezioni',<?php echo $votoSeggio2002; ?>,<?php echo $votoSeggio2002; ?>,<?php echo $idSeggio2002; ?>],
		<?php } else {?>
		  [' <?php echo $numSeg2002;?>','Sezioni',<?php echo $votoSeggio2002; ?>,<?php echo $votoSeggio2002; ?>,<?php echo $idSeggio2002; ?>] 
		  <?php } } ?>
        ]);
	
	
        tree = new google.visualization.TreeMap(document.getElementById('chart_div'));
		
        var options = {
		minColor: '#e7711c',
		midColor: '#fff',
		maxColor: '#4374e0',
		showScale: true,
		generateTooltip: showStaticTooltip
	  };
 tree.draw(data, options);
  google.visualization.events.addListener(tree, 'select', myOnClickFunction);
	 
	 
	 function myOnClickFunction(){
		    var selection = tree.getSelection();
    		if (selection.length) {
				console.log(selection);
				//alert(selection[0].row);
				draw(selection[0].row);

				//var txt = data.getValue(selection[0].row, selection[0].column);
    		}
		 }
		  function showStaticTooltip(row, size, value) {
			 return '<div style="background:#fd9; padding:10px; border-style:solid"> Voti : '+ data.getValue(row, 3) +'</div>';//'+data.getValue(row, 4)+'<br>
		  }	
      }
	 
    </script>
    <?php
	}
else if(isset($_GET['id2']) && $_GET['id2'] != ''){

	$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/candidati/risultati/json/?id='.$_GET['id2'].'&anno=2006'); 
$arrayVoti2006=json_decode($json);
	$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/spatial/'); 
$arraySpatial2006=json_decode($json);
$idSeggio2006 = 0;

?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['treemap']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)','idSezione'],
          ['Sezioni', null,0,0,0],
	<?php for($i=1; $i<84 ; $i++ ){  /* */
		for($y=0;$y<count($arraySpatial2006->{'features'});$y++){
			if($i==$arraySpatial2006->{'features'}[$y]->{'properties'}->{'sezione'}){
				$idSeggio2006 = $arraySpatial2006->{'features'}[$y]->{'properties'}->{'id'};
				}
		}
		$votoSeggio2006 = $arrayVoti2006[0]->{'s'.$i}; 
			if($i<10){$numSeg2006 = "0".$i; }else { $numSeg2006 = $i; } ?> 
		<?php if($i != 83){ ?>
          	[' <?php echo $numSeg2006;?>','Sezioni',<?php echo $votoSeggio2006; ?>,<?php echo $votoSeggio2006; ?>,<?php echo $idSeggio2006; ?>],
		<?php } else {?>
		  [' <?php echo $numSeg2006;?>','Sezioni',<?php echo $votoSeggio2006; ?>,<?php echo $votoSeggio2006; ?>,<?php echo $idSeggio2006; ?>] 
		  <?php } } ?>
        ]);
	
	
        tree = new google.visualization.TreeMap(document.getElementById('chart_div'));
		
        var options = {
		minColor: '#e7711c',
		midColor: '#fff',
		maxColor: '#4374e0',
		showScale: true,
		generateTooltip: showStaticTooltip
	  };
 tree.draw(data, options);
  google.visualization.events.addListener(tree, 'select', myOnClickFunction);
	 
	 
	 function myOnClickFunction(){
		    var selection = tree.getSelection();
    		if (selection.length) {
				console.log(selection);
				//alert(selection[0].row);
				draw(selection[0].row);

				//var txt = data.getValue(selection[0].row, selection[0].column);
    		}
		 }
		  function showStaticTooltip(row, size, value) {
			 return '<div style="background:#fd9; padding:10px; border-style:solid"> Voti : '+ data.getValue(row, 3) +'</div>';//'+data.getValue(row, 4)+'<br>
		  }	
      }
	 
    </script>

<?php
	
	}
else if(isset($_GET['id3']) && $_GET['id3'] != ''){
		$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/candidati/risultati/json/?id='.$_GET['id3'].'&anno=2011'); 
$arrayVoti2011=json_decode($json);
	$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/spatial/'); 
$arraySpatial2011=json_decode($json);
$idSeggio2011 = 0;

?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['treemap']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)','idSezione'],
          ['Sezioni', null,0,0,0],
	<?php for($i=1; $i<84 ; $i++ ){  /* */
		for($y=0;$y<count($arraySpatial2011->{'features'});$y++){
			if($i==$arraySpatial2011->{'features'}[$y]->{'properties'}->{'sezione'}){
				$idSeggio2011 = $arraySpatial2011->{'features'}[$y]->{'properties'}->{'id'};
				}
		}
		$votoSeggio2011 = $arrayVoti2011[0]->{'s'.$i}; 
			if($i<10){$numSeg2011 = "0".$i; }else { $numSeg2011 = $i; } ?> 
		<?php if($i != 83){ ?>
          	[' <?php echo $numSeg2011;?>','Sezioni',<?php echo $votoSeggio2011; ?>,<?php echo $votoSeggio2011; ?>,<?php echo $idSeggio2011; ?>],
		<?php } else {?>
		  [' <?php echo $numSeg2011;?>','Sezioni',<?php echo $votoSeggio2011; ?>,<?php echo $votoSeggio2011; ?>,<?php echo $idSeggio2011; ?>] 
		  <?php } } ?>
        ]);
	
	
        tree = new google.visualization.TreeMap(document.getElementById('chart_div'));
		
        var options = {
		minColor: '#e7711c',
		midColor: '#fff',
		maxColor: '#4374e0',
		showScale: true,
		generateTooltip: showStaticTooltip
	  };
 tree.draw(data, options);
  google.visualization.events.addListener(tree, 'select', myOnClickFunction);
	 
	 
	 function myOnClickFunction(){
		    var selection = tree.getSelection();
    		if (selection.length) {
				console.log(selection);
				//alert(selection[0].row);
				draw(selection[0].row);

				//var txt = data.getValue(selection[0].row, selection[0].column);
    		}
		 }
		  function showStaticTooltip(row, size, value) {
			 return '<div style="background:#fd9; padding:10px; border-style:solid"> Voti : '+ data.getValue(row, 3) +'</div>';//'+data.getValue(row, 4)+'<br>
		  }	
      }
	 
    </script>
	<?php
	}?>

  </head>
  <body>
    <div id="chart_div" style="width:100%; height: 500px; margin:0 auto;"></div>
<?php /*?>    
    <div style="text-align: center; padding-right: 0px;">
<h2 class="site-heading" style="padding-top: 40px; padding-bottom:40px;">Mappa delle sezioni <strong style="font-weight: 700;">elettorali</strong></h2>    
    </div>
    <?php */?>
    <div id="map" style="width: 100%; height: 500px; position:absolute;"></div>
    
<script src="map/3dparty/leaflet/js/leaflet.js"></script> 
<script src="map/3dparty/leaflet-ajax/dist/leaflet.ajax.min.js"></script> 
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script> 
<script src="map/3dparty/EasyAutocomplete/jquery.easy-autocomplete.min.js"></script> 
<script src="map/js/variables.js"></script> 
<script src="map/js/map.js"></script> 
<script src="map/js/app.js"></script>
  </body>
</html>