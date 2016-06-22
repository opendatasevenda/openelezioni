<!DOCTYPE html>
<html>
<head>
<title>Open Elezioni Caserta</title>
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
<?php include "../header.php"; ?>
<div style=" position: fixed; width: 100%; height: 100%;">
<div id="map" style="width: 100%; height: 100%; top:85px; position:absolute;"></div>
</div>
<div class="container-fluid">
  <div class="blocco_ricerca" style="width:350px;top: 92px;left: 55px;border: 1px solid #ccc;background:#fff;position:absolute;padding:15px;box-shadow: 0 1px 5px rgba(0,0,0,0.65);border-radius: 4px;"> <b>Ricerca strada</b>
    <input class="form-control" id="inputStrada" placeholder="e.g. Via Roma" type="text">
    <b>Ricerca sezione</b>
    <input class="form-control" id="inputSezione" placeholder="e.g. 2" type="text">
  </div>
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
