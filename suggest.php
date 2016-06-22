<?php
error_reporting(0); 

$q=$_GET['q'];
$limit = $_GET['limit'];
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/candidati/elenco/json/?anno=2002&nome='.$q.'');
$array=json_decode($json);
$cont =1;
$init=0;
 echo '[';
foreach ($array as $k => $v) {
	if($init!=0){echo ",";}
   foreach($v as $i => $y){
	   
	   if($cont==$limit){echo '"'.$y->{'id'}.'-'.$y->{'candidato'}.'"';break;}else{echo '"'.$y->{'id'}.'-'.$y->{'candidato'}.'"'.',';}
	   $cont++;
	   
	   }
	 $init++;
	 if($limit == $cont)echo "";{break;}
	$cont=1;
}
echo ']';
?>