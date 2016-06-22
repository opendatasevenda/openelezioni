<!DOCTYPE html>
<html>
<head>
<title>Mappa Politiche</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="3dparty/leaflet/css/leaflet.css" />
<link rel="stylesheet" href="http://bootswatch.com/lumen/bootstrap.min.css" />
<link rel="stylesheet" href="3dparty/EasyAutocomplete/easy-autocomplete.min.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/app.css">
<?php include "../stylesheet.php"; ?>
<style>
html {
	overflow:hidden;
	height: 100%;
}
body {
	height: 100%;
}
</style>
</head>
<body>
<div>
<div style=" position: fixed; width: 100%; height: 100%;">
<div id="map" style="width: 100%; height: 100%; position:absolute;"></div>
</div>
<script src="3dparty/leaflet/js/leaflet.js"></script> 
<script src="3dparty/leaflet-ajax/dist/leaflet.ajax.min.js"></script> 
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script> 
<script src="3dparty/EasyAutocomplete/jquery.easy-autocomplete.min.js"></script> 
<script src="js/variables.js"></script> 
<script src="js/map.js"></script> 
<script src="js/app.js"></script>
</body>
</html>
