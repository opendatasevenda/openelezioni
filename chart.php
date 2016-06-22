<?php error_reporting(0);
if($_GET['flag']=='candidato'){
	$text = "Voti Partito";
	$text1 = "Totale Voti Candidato";
	$nomeCandidato= $_GET['nomeCandidato'];
	$votiCandidato= $_GET['votiCandidato'];
	$votiPartito = $_GET['votiPartito'];
	$nomepartito = $_GET['nomepartito'];
	}
else if($_GET['flag']=='partito'){
	$text = "Altri partiti";
	$text1 = "Totale Voti Partito";
	$nomePartito = $_GET['nomePartito'];
	$votiPartito = $_GET['votiPartito'];
	$totaleVoti = $_GET['totaleVoti'];
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script>

</script>
<style>
body {
	height: 100%;
	margin: 0px;
}
html {
	height: 100%;
	margin: 0px;
}
</style>
<?php /*?><script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php */?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<title>Grafico</title>
</head>

<body>
<?php 
if($_GET['flag']=='candidato'){?>
<script>
<?php /*?>   google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {

       var data = google.visualization.arrayToDataTable([
         ['Task', 'Hours per Day'],
         ['<?php echo $nomeCandidato; ?>', <?php echo $votiCandidato; ?>],
         ['<?php echo $text; ?>', <?php echo $votiPartito; ?>],
        ]);

       var options = {
         title: '<?php echo $text1; ?>'
       };

       var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

       chart2.draw(data, options);
     }
<?php */?>
$(function () {
// Load the fonts
 // Radialize the colors
    
    
Highcharts.theme = {
   colors: ["#E75F60", "#62A3C9", "#f45b5b", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
      "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
       
   chart: {
      backgroundColor: {
         linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
         stops: [
            [0, '#fff'],
            [1, '#fff']
         ]
      },
    
      plotBorderColor: '#606063'
   },
   title: {
      style: {
         color: '#000',
         textTransform: 'uppercase',
         fontSize: '20px'
      }
   },
   subtitle: {
      style: {
         color: '#E0E0E3',
         textTransform: 'uppercase'
      }
   },
   
  
   
   xAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      title: {
         style: {
            color: '#A0A0A3'

         }
      }
   },
   yAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      tickWidth: 1,
      title: {
         style: {
            color: '#A0A0A3'
         }
      }
   },
   tooltip: {
      backgroundColor: 'rgba(0, 0, 0, 0.85)',
      style: {
         color: '#F0F0F0'
      }
   },

};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);


    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: null,
            type: 'pie'
        },
        title: {
            text: 'Totale Voti Candidato'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || '#000'
                    },
                    connectorColor: '#999'
                }
            }
        },
        series: [{
            name: '<?php echo $text1; ?>',
            data: [
                { name: '<?php echo $nomeCandidato; ?>', y: <?php echo $votiCandidato; ?> },
               
                { name: '<?php echo $nomepartito; ?>', y: <?php echo $votiPartito; ?> },
                
            ]
        }]
    });
});



</script>
<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<?php	} else if($_GET['flag']=='partito'){?>
<script>
<?php /*?>   google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {

       var data = google.visualization.arrayToDataTable([
         ['Task', 'Hours per Day'],
         ['<?php echo $nomePartito; ?>', <?php echo $votiPartito; ?>],
         ['<?php echo $text; ?>', <?php echo $totaleVoti; ?>],
        ]);

       var options = {
        title: '<?php echo $text1; ?>'
       };

       var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

       chart2.draw(data, options);
     }
<?php */?>
$(function () {
// Load the fonts
 // Radialize the colors
    
    
Highcharts.theme = {
   colors: ["#E75F60", "#62A3C9", "#f45b5b", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
      "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
       
   chart: {
      backgroundColor: {
         linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
         stops: [
            [0, '#fff'],
            [1, '#fff']
         ]
      },
    
      plotBorderColor: '#606063'
   },
   title: {
      style: {
         color: '#000',
         textTransform: 'uppercase',
         fontSize: '20px'
      }
   },
   subtitle: {
      style: {
         color: '#E0E0E3',
         textTransform: 'uppercase'
      }
   },
   
  
   
   xAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      title: {
         style: {
            color: '#A0A0A3'

         }
      }
   },
   yAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      tickWidth: 1,
      title: {
         style: {
            color: '#A0A0A3'
         }
      }
   },
   tooltip: {
      backgroundColor: 'rgba(0, 0, 0, 0.85)',
      style: {
         color: '#F0F0F0'
      }
   },

};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);


    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: null,
            type: 'pie'
        },
        title: {
            text: '<?php echo $text1; ?>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || '#000'
                    },
                    connectorColor: '#999'
                }
            }
        },
        series: [{
            name: '<?php echo $text1; ?>',
            data: [
                { name: '<?php echo $nomePartito; ?>', y: <?php echo $votiPartito; ?> },
               
                { name: '<?php echo $text; ?>', y: <?php echo $totaleVoti; ?> },
                
            ]
        }]
    });
});





</script>
<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<?php	}

?>
<?php /*?><div id="piechart2" style="width: 100%; height: 100%;"></div><?php */?>
</body>
</html>
