<?php 
//session_start();
//session_unset();
//    $_SESSION['FBID'] = NULL;
//    $_SESSION['FULLNAME'] = NULL;
//    $_SESSION['EMAIL'] =  NULL;
//$_COOKIE['security_uid']=null;
//$_COOKIE['logged']=0;

setcookie("security_uid", null, time()-3600);
header("Location: http://elezioni.allyoucandata.it/"); 

// you can enter home page here ( Eg : header("Location: " ."http://www.mallvill.it"); 
?>
