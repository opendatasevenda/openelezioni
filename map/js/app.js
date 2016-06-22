// Selected Style
var selectedStyle = {
    "color": "#E66060",
    "weight": 2,
    "opacity": 0.65
};

// First layer added
firstTime = true;

// EasyAutocomplete plugin options (Strade)
var options = {
    url: API_BASE_URL + "spatial/?geotable=caserta_grafo_viario&text=id, indirizzo",

    getValue: "indirizzo",

    list: {
        match: {
            enabled: true
        },
        onChooseEvent: function(){
            var id = $("#inputStrada").getSelectedItemData().id;            
            var parameter = "id=" + id;
            var URL = API_BASE_URL + 'spatial/';
            // "Grafo viario" AJAX
            $.ajax({
               url: URL,
               data: {
                   geotable : 'caserta_grafo_viario',
                   parameters : parameter
               },
               success: function(data){
                   if(!firstTime)
                        map.removeLayer(layer);
                   firstTime = false;
                   layer = L.geoJson(data,{
                       style: selectedStyle,
                       onEachFeature : setSearchContentStrade
                   }).addTo(map);
                   map.fitBounds(layer.getBounds());
               }
            });        
        }
    }
};



// EasyAutocomplete plugin start-up
$("#inputStrada").easyAutocomplete(options);

// ---------------------------------------------------------------------------------------

// EasyAutocomplete plugin options (Sezioni)
var options = {
    url: API_BASE_URL + "spatial/?geotable=caserta_sezioni_elettorali&text=id, sezione",

    getValue: "sezione",

    list: {
        match: {
            enabled: true
        },
        onChooseEvent: function(){
            var id = $("#inputSezione").getSelectedItemData().id;            
            var parameter = "id=" + id;
            var URL = API_BASE_URL + 'spatial/';
            // "Grafo viario" AJAX
            $.ajax({
               url: URL,
               data: {
                   geotable : 'caserta_sezioni_elettorali',
                   parameters : parameter
               },
               success: function(data){
                   if(!firstTime)
                        map.removeLayer(layer);
                   firstTime = false;
                   layer = L.geoJson(data,{
                       style: selectedStyle,
                       onEachFeature: setSearchContentSezioni                       
                   }).addTo(map);
                   map.fitBounds(layer.getBounds());
               }
            });        
        }
    }
};

// EasyAutocomplete plugin start-up
$("#inputSezione").easyAutocomplete(options);

/**
 * Funzione: setSearchContentSezioni
 * 
 * @param {String} feature
 * @param {String} layer
 */
function setSearchContentSezioni(feature, layer) {
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
            var f = feature.properties.votanti_f; //Math.floor((Math.random() * 1000) + 1);
            var m = feature.properties.votanti_m; // Math.floor((Math.random() * 1000) + 1);
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
        
        // Set search content
        $('#searchContent').html(content);        
    }
}

/**
 * Funzione: setSearchContentStrade
 * Per le "Strade"
 * 
 * @param {String} feature
 * @param {String} layer
 */
function setSearchContentStrade(feature, layer) {
    if (feature.properties) {
        var content = '<p class="indirizzo">' + feature.properties.indirizzo + '</p><br>';
        if(feature.properties.inizio)
            content += '<i class="ion-ios-flag">&nbsp;Inizio</i> ' + feature.properties.inizio + '<br>';
        if(feature.properties.fine)
            content += '<i class="ion-ios-flag-outline">&nbsp;Fine</i> ' + feature.properties.fine ;
        
        // Bind popup
        layer.bindPopup(content); 
        
        // Set search content
        $('#searchContent').html(content);                        
    }
	


}
	// Funzione ricerca tramite id

function draw(id){
	var parameter = "sezione=" + id;
    var URL = API_BASE_URL + 'spatial/';
    $.ajax({
       url: URL,
       data: {
           geotable : 'caserta_sezioni_elettorali',
           parameters : parameter
       },
       success: function(data){
           if(!firstTime)
                map.removeLayer(layer);
           firstTime = false;
           layer = L.geoJson(data,{
               style: selectedStyle,
               onEachFeature: setSearchContentSezioni                       
           }).addTo(map);
           map.fitBounds(layer.getBounds());
       }
    });        
}