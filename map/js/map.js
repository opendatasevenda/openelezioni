$( document ).ready(function() {   
    // Tiles (basemap)    
    var mapquestOSM = L.tileLayer('http://otile1.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://mapquest.com">Mapquest</a>'        
    });    
    
    var stamenToner = L.tileLayer('http://a.tile.stamen.com/toner/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://maps.stamen.com/">Stamen</a>'        
    }); 
    
    var cartoDBLight = L.tileLayer('http://a.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://cartodb.com/">CartoDB</a>'        
    }); 
        
    var mapboxStreets = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZm1hcmlnbGlhbm8iLCJhIjoiY2luc28xcXBtMDBqZXZmbTJvaTFzd3J6MSJ9.zPOkaLTnYYbqeSGPv7GuGA', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'mapbox.streets'
    });

    var mapboxSatellite = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZm1hcmlnbGlhbm8iLCJhIjoiY2luc28xcXBtMDBqZXZmbTJvaTFzd3J6MSJ9.zPOkaLTnYYbqeSGPv7GuGA', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'mapbox.satellite'
    });
    
    var mapboxLight = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/light-v8/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZm1hcmlnbGlhbm8iLCJhIjoiY2luc28xcXBtMDBqZXZmbTJvaTFzd3J6MSJ9.zPOkaLTnYYbqeSGPv7GuGA', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'mapbox.light'
    });
    
    var mapboxDark = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/dark-v8/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZm1hcmlnbGlhbm8iLCJhIjoiY2luc28xcXBtMDBqZXZmbTJvaTFzd3J6MSJ9.zPOkaLTnYYbqeSGPv7GuGA', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'mapbox.dark'
    });
    
    var mapboxEmerald = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/emerald-v8/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZm1hcmlnbGlhbm8iLCJhIjoiY2luc28xcXBtMDBqZXZmbTJvaTFzd3J6MSJ9.zPOkaLTnYYbqeSGPv7GuGA', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'mapbox.emerald'
    });
    
    var baseMaps = {
        "Mapquest - OSM" : mapquestOSM,
        "Stamen - Toner" : stamenToner,
        "CartoDB - Light" : cartoDBLight,
/*        "MapBox - Streets" : mapboxStreets,
        "MapBox - Satellite" : mapboxSatellite,
        "MapBox - Light" : mapboxLight,
        "MapBox - Dark" : mapboxDark,
        "MapBox - Emerald" : mapboxEmerald,*/
        "Nessuno sfondo" : L.tileLayer('')
    };
        
    // Map
  // map = L.map('map').setView([41.0885, 14.3566], 13);
   var southWest = L.latLng(40.98341, 14.45066),

    northEast = L.latLng(41.1538, 14.2357),

    bounds = L.latLngBounds(southWest, northEast);

map = L.map('map', {

        center: [41.0885, 14.3566],

        zoom: 13,

        minZoom: 12,

        maxBounds: bounds

    });
	
    // Add basemap
    map.addLayer(mapquestOSM);
    
    var geojsonStyle = {
        "color": "#ff7800",
        "weight": 5,
        "opacity": 0.65
    };
    
    // Add overlays
    geojsonLayer = new L.GeoJSON.AJAX(API_BASE_URL + "spatial/", {
        style: styleFunction,
        onEachFeature: onEachFeature
    });
    geojsonLayer.addTo(map);    
    
    var overMaps = {
        //"Sezioni ISTAT" : geojsonLayer
		"Sezioni Elettorali" : geojsonLayer
		
    };
    
    // Layers control
    L.control.layers(baseMaps,overMaps, {position: 'topright'}).addTo(map);   
});

/**
 * Funzione: styleFunction
 * 
 * @param {String} feature
 */
function styleFunction(feature){
    //if(feature.properties.LBL > 0 && feature.properties.LBL < 100){
        return {
            "color": "#63A2C9",
            "weight": 2,
            "opacity": 0.65
        }
    //}     
}

/**
 * Funzione: onEachFeature
 * Per le "Sezioni"
 * 
 * @param {String} feature
 * @param {String} layer
 */
function onEachFeature(feature, layer) {
    if (feature.properties) {
        var content = '<table class="table table-striped"><thead><th>Sezione</th><th>Collegio</th>' +
                      '<th>Sede</th></thead><tbody>';
            content += '<td class="sezione">' + feature.properties.sezione + '</td>'
                    +  '<td class="collegio">' + feature.properties.collegio + '</td>'
                    +  '<td>' + feature.properties.sede + '</td>' ;  
            content += '</tbody></table>';
            
            // ---------
            // STUBS
            // ---------
            var f = feature.properties.votanti_f;//Math.floor((Math.random() * 1000) + 1);
            var m = feature.properties.votanti_m;// Math.floor((Math.random() * 1000) + 1);
            var t = feature.properties.votanti_to;
            // END
            content += '<div class="row" align="center"><div class="col-xs-4">' +
                       '<i class="ion-woman">&nbsp;'+f+'</i></div>' +
                       '<div class="col-xs-4">' +
                       '<i class="ion-man">&nbsp;'+m+'</i></div>' +
                       '<div class="col-xs-4">' +
                       '<i class="ion-android-people">&nbsp;'+t+'</i></div></div>';
        
        // Bind popup
        layer.bindPopup(content);
        
        // Mouseover
        /*
        layer.on('mouseover', function (e) {
            //this.openPopup();
            $('#mapOnMouseOverContent').html(content);
        });
        
        // Mouseout
        layer.on('mouseout', function (e) {
            //this.closePopup();
            $('#mapOnMouseOverContent').html('');
        });*/
        
        /* LABEL 
        var label = L.marker(layer.getBounds().getCenter(), {
            icon: L.divIcon({
                className: 'label',
                html: feature.properties.sezione,
                iconSize: [20, 20]
            })
        }).addTo(map);*/       
    }
}