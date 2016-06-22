<?php 

error_reporting(0); 

$q=$_GET['q'];
$limit = 7;
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/candidati/elenco/complessivo/');
$array=json_decode($json);
$cont =1;
$init=0;
echo '[';

for($i=0;$i<(count($array));$i++){
	if($i!=(count($array)-1)){
	echo '["'.$array[$i]->{'nome'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
	}else{
	echo '["'.$array[$i]->{'nome'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"]';
		}
	}
echo ']';
?>