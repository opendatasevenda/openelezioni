<?php 

$anno =  $_GET['annoPartito'];
$nomePartito = $_GET['nomePartito'];
$json = file_get_contents('http://api.elezioni.allyoucandata.it/1.0/partiti/json/?anno='.$anno); 
$arrayPartito=json_decode($json);



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento senza titolo</title>
<script src="js/vendor/jquery-2.2.0.min.js"></script> 
<script src="js/vendor/bootstrap.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/app.js"></script> 
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>

<body>
<script>
var chartami =  $(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Grafico'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories:
			<?php 
			$count = 0;
			$temp=0;
			echo "["; ?>
			<?php for($i=0;$i<count($arrayPartito);$i++){
			if($i==count($arrayPartito)-1){
				if($arrayPartito[$i]->{"nome"} == $nomePartito){
					echo "'".$arrayPartito[$i]->{"nome"}."'";
					$temp=1;
				}else{
					echo "'".$arrayPartito[$i]->{"nome"}."'";
					if($temp==0){$count++;}
				}
            	
			}else {
			if($arrayPartito[$i]->{"nome"} == $nomePartito){
					echo "'<strong>".$arrayPartito[$i]->{"nome"}."</strong>',";
					$temp=1;
					}else{
						echo "'".$arrayPartito[$i]->{"nome"}."',";}
					if($temp==0){$count++;}
			}
			} echo "],";?>
			
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">Voti : </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
		<?php
		$voti = "";
		echo "{";
		echo "name:'ALTRI PARTITI',";
		echo "data:[";
		for($i=0;$i<count($arrayPartito);$i++){
			if($i!=$count){
				if($i==count($arrayPartito)-1){
				  echo $arrayPartito[$i]->{"totale"};
				}else{
		  			echo $arrayPartito[$i]->{"totale"}.",";
				}
			}else{
				$voti=$arrayPartito[$i]->{"totale"};
				echo "null,";
				}
			}
		?>]},
		<?php 
		echo "{";
		echo "name:'".$nomePartito."',";
		echo "color:'red',";
		echo "data:[";
		for($i=0;$i<count($arrayPartito);$i++){
			if($i!=$count){
				if($i==count($arrayPartito)-1){
				  echo "null";
				}else{
		  			echo "null,";
				}
			}else{
				echo $voti.",";
				}
			}
		?>]}
		]
    });
});

</script>


<div id="container" style="min-width: 310px; height: 650px; margin: 0 auto"></div>


</body>
</html>
