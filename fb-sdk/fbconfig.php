<?php
//FacebookSession::setDefaultApplication( 'KEY1','KEY2' );
session_start();
include ("fb-sdk/Mail.php");
function mail_notify_login($id_utente, $lingua, $smtp_host, $smtp_username, $smtp_password){

	$query = "SELECT * FROM `tb_users` WHERE `id_user` = '".$id_utente."'";
	$exec = mysql_query ( $query );
	$result = mysql_fetch_assoc( $exec );
	$nomeutente = $result["user_name"]." ".$result["user_surname"];

	$from = "info@allyoucandata.it";
	$to = "dedrisproject@gmail.com"; 
	$subject = "OpenElezioni - ".$nomeutente." - ha effettuato l'accesso da Facebook";
	$body = "".$nomeutente." - ha effettuato l'accesso da Facebook"; 
			 
	 $headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
	 $smtp = Mail::factory('smtp', array ('host' => $smtp_host, 'auth' => true, 'username' => $smtp_username, 'password' => $smtp_password));
	 $mail = $smtp->send($to, $headers, $body);
	 if (PEAR::isError($mail)) { } else { }
}

// Funzione per ottenere url seo friendly
function slug($str) {
	if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
	$str = mb_convert_encoding($str, 'UTF-8', mb_detect_encoding($str));
	$str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
	$str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\\1', $str);
	$str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
	$str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
	$str = strtolower( trim($str, '-') );
	return $str;
}

include 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;

$siteurl = "http://".$_SERVER['HTTP_HOST']."";

// init app with app id and secret
FacebookSession::setDefaultApplication( 'KEY1','KEY2' );
// login helper with redirect_uri
	$helper = new FacebookRedirectLoginHelper(''.$siteurl.'/fb-login.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  $loginUrl = $helper->getLoginUrl( array('scope' => 'email'));
  header("Location: ".$loginUrl);
} catch( Exception $ex ) {
  $loginUrl = $helper->getLoginUrl( array('scope' => 'email'));
  header("Location: ".$loginUrl);
}
// see if we have a session
if ( isset( $session ) ) {

  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();

	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
	$fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	$fb_first_name = $graphObject->getProperty('first_name'); // To Get Facebook full name
	$fb_last_name = $graphObject->getProperty('last_name'); // To Get Facebook full name
	$femail = $graphObject->getProperty('email');    // To Get Facebook email ID
	$flocale = $graphObject->getProperty('locale');    // To Get Facebook email ID
	$link = $graphObject->getProperty('link');    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	$_SESSION['FBID'] = $fbid;           
	$_SESSION['FULLNAME'] = $fbfullname;
	$_SESSION['EMAIL'] =  $femail;
	/* ---- header location after session ----*/
print_r($graphObject);
		echo "Loggato<br>";
		echo $fbid." <- id <br>";
		echo $fb_first_name." <- nome <br>";
		echo $fb_last_name." <- cognome <br>";
		echo $femail." <- Email <br>";
		echo $link." <- link <br>";
		echo $flocale." <- Lingua <br>";

//---------------------------------------------------------------------------------
// Apro la connessione al database
define('DB_SERVER', 'HOST');
define('DB_USERNAME', 'USER');    // DB username
define('DB_PASSWORD', 'PASS');    // DB password
define('DB_DATABASE', 'DBNAME');      // DB name
//=============================================================================================
// Impostazioni Cloud SMTP - Mailjet.com
//=============================================================================================
$smtp_host = "in-v3.mailjet.com";
$smtp_username = "";
$smtp_password = "";
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
//---------------------------------------------------------------------------------
if (!empty($femail)) {

	
	//---------------------------------------------------------------------------------
	$check_query_SQL = "SELECT COUNT(user_email) AS conteggio FROM tb_users WHERE user_email = '".$graphObject->getProperty('email')."'";
	$exec = mysql_query ( $check_query_SQL );
	$result = mysql_fetch_assoc( $exec );
	if ($result["conteggio"] == 0) {
	//	 echo "Registrazione utente in corso";
	
	$creation_data = date("d-m-Y");
	$system_url =  slug($fb_first_name." ".$fb_last_name);
	$md5_id = md5($fbid);

	$register_from_facebook_SQL = "INSERT INTO tb_users (md5_id, user_verified, user_activation_key, user_type, user_username,  user_password, user_name, user_surname, user_email, creation_date, user_status, img_path, system_url, user_language, facebook_uid) VALUES  ('".$md5_id."', '1', '".$md5_id."', 'standard', '".$graphObject->getProperty('email')."', '".$graphObject->getProperty('id')."','".$graphObject->getProperty('first_name')."','".$graphObject->getProperty('last_name')."','".$graphObject->getProperty('email')."','".$creation_data."','likeineaters','https://graph.facebook.com/v2.3/".$graphObject->getProperty('id')."/picture?type=large','".$system_url."','".$graphObject->getProperty('locale')."','".$graphObject->getProperty('id')."');";
		//echo $register_from_facebook_SQL;
		mysql_query($register_from_facebook_SQL);					

		$check_query_SQL = "SELECT * FROM tb_users WHERE user_email = '".$graphObject->getProperty('email')."'";
		$exec = mysql_query ( $check_query_SQL );
		$result = mysql_fetch_assoc( $exec );
		$md5_id = $result["md5_id"];
			$id_user = $result["id_user"];
		setcookie("security_uid", $md5_id, time()+51840000 ); // Salvo l'id utente nel cookie
		setcookie("logged", "1", time()+51840000 ); // Salvo un cookie che userò nel frontend
				// Invio una notifica email agli admin per il login effettuato 
		mail_notify_login($id_user, $language_selected, $smtp_host, $smtp_username, $smtp_password);	

		mysql_close();
		
		header('Location: '.$siteurl.'/index.php');
		exit(0); // Effettuo il redirect alla pagina principale

 		
	} else  {
	
	$check_query_SQL = "SELECT * FROM tb_users WHERE user_email = '".$graphObject->getProperty('email')."'";
	$exec = mysql_query ( $check_query_SQL );
	$result = mysql_fetch_assoc( $exec );
	$md5_id = $result["md5_id"];
			$id_user = $result["id_user"];
		//	echo "Login in corso";	
		setcookie("security_uid", $md5_id, time()+7200 ); // Salvo l'id utente nel cookie
		setcookie("logged", "1", time()+7200 ); // Salvo un cookie che userò nel frontend
		
		// Invio una notifica email agli admin per il login effettuato 
		//mail_notify_login($id_user, $language_selected, $smtp_host, $smtp_username, $smtp_password);	
			
		mysql_close();
		
		header('Location: '.$siteurl.'/index.php');
		exit(0); // Effettuo il redirect alla pagina principale

	}
//---------------------------------------------------------------------------------
// Chiudo la connessione al database
mysql_close();
//---------------------------------------------------------------------------------

}
} else {
// Se non sono loggato 
	$loginUrl = $helper->getLoginUrl( array('scope' => 'email')); // Aggiungo i permessi - se più di uno separati da virgola
	header("Location: ".$loginUrl); // Apro l'url
}
?>