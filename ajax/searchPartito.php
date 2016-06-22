<?php
error_reporting(0); 

$q=$_GET['q'];
$limit = 7;
$json = file_get_contents('http://api.elezioni.allyoucandata.com/1.0/partiti/elenco/complessivo/');
$array=json_decode($json);
$cont =1;
$init=0;

echo '[';
for($i=0;$i<(count($array));$i++){
if($i!=(count($array)-1)){
	if($i==3 || $i==5 || $i==7 || $i==8 || $i==12 || $i==11|| $i==13){
	
		if($i==3){
		echo '["'.$array[$i]->{'nome1'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}
		if($i==5){
		echo '["'.$array[$i]->{'nome1'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}
		if($i==7){
		echo '["'.$array[$i]->{'nome1'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}
		if($i==8){
		echo '["'.$array[$i]->{'nome1'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}
		if($i == 11){
		echo '["'.$array[$i]->{'nome2'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}
		if($i == 12){
		echo '["'.$array[$i]->{'nome1'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}
		if($i == 13){
		echo '["'.$array[$i]->{'nome1'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';	
		}
		
	}else{
			
	if($array[$i]->{'nome1'} != ""){
		echo '["'.$array[$i]->{'nome1'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
	}
	if($array[$i]->{'nome2'} != ""){
		echo '["'.$array[$i]->{'nome2'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
	}
	if($array[$i]->{'nome3'} != ""){
		echo '["'.$array[$i]->{'nome3'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
	}
	
	}
}else{
		echo '["'.$array[$i]->{'nome3'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"]';	
}
}


/*for($i=0;$i<(count($array));$i++){
	if($array[$i]->{'nome1'} != ""){
	echo '["'.$array[$i]->{'nome1'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}
	}

for($i=0;$i<(count($array));$i++){
	if($array[$i]->{'nome2'} != ""){
	echo '["'.$array[$i]->{'nome2'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}
	}

for($i=0;$i<(count($array));$i++){
	if($i!=(count($array)-1)){
	echo '["'.$array[$i]->{'nome3'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}else{
	echo '["'.$array[$i]->{'nome3'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"]';	
			}
	}*/

/*for($i=0;$i<(count($array));$i++){
	if($i!=(count($array)-1)){
	echo '["'.$array[$i]->{'sigla'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"],';
		}else{
	echo '["'.$array[$i]->{'sigla'}.'",'.'"'.$array[$i]->{'id1'}.'",'.'"'.$array[$i]->{'id2'}.'",'.'"'.$array[$i]->{'id3'}.'"]';	
			}
	}*/
echo ']';
/*foreach ($array as $k => $v) {
	if($init!=0){echo ",";}
   foreach($v as $i => $y){
	   
	   if($cont==$limit){echo '["'.$y->{'nome'}.'",'.'"'.$y->{'id1'}.'",'.'"'.$y->{'id2'}.'",'.'"'.$y->{'id3'}.'"]';break;}else{echo '["'.$y->{'candidato'}.'",'.'"'.$y->{'id'}.'",'.'"'.$y->{'id'}.'",'.'"'.$y->{'id'}.'"],';}
	   $cont++;
	   
	   }
	 $init++;
	 if($limit == $cont)echo "";{break;}
	$cont=1;
	echo $k ." - " .$v;
}
echo ']';*/
?>





