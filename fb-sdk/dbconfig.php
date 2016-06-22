<?php
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
?>