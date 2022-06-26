
//coord by URL params
/* var url = L.Util.getParamString(params, this._url, true); // outra forma de pegar params da url*/
var params = {};
let _TILES = 'liyue_mondstad'

window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
  params[key] = value;  
});

if(params && params.tiles) {
  _TILES = params['tiles']
}

/* var mapaURL = L.Util.getParamString(params, this._url, true);
    mapaURL = mapaURL.split('?')[1]; */

if(params && params.id && params.lat && params.lng){
    /* mapaURL.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
    params[key] += value;
    }) */
    var idMarker = params['id'];
    var lasLMlat = params['lat'];
    var lasLMlng = params['lng'];
   

    var map = L.map('map', {
      zoomControl: false,
      zoomDelta: 0.25,
      zoomSnap: 0, 
    
    }).setView([lasLMlat, lasLMlng], 5).setZoom(6);

    setTimeout(() => {
      var marcadores = document.querySelector('#map .leaflet-marker-pane');
      var idMarcador = marcadores.querySelector(`[id="${idMarker}"]`);

      idMarcador.style.display='flex';
    }, 100);



} else {

  //point
  var pointActive = true;

  //cria variavel LatLng da ultima vizualização do mapa
  if(localStorage.getItem('lastLocationMap')){
    var lastLocationMap = localStorage.getItem('lastLocationMap').split(",");
    var lasLMlat = lastLocationMap[0];
    var lasLMlng = lastLocationMap[1];
  }else{
    var lasLMlat = 0;
    var lasLMlng = 0;
  }
  //cria o zoom inicial
  if(localStorage.getItem('lastZoomMap')){
    var lastZoomMap = localStorage.getItem('lastZoomMap');
  } else {
    var lastZoomMap = 5;
  }


  //Creating the Map
  var map = L.map('map', {
    zoomControl: false,
    zoomDelta: 0.25,
    zoomSnap: 0, 

  }).setView([lasLMlat, lasLMlng], 5).setZoom(lastZoomMap);

  //localizão da ultima vizualização do mapa
  map.on('moveend', function(event) {
    localStorage.setItem('lastLocationMap', L.latLng(map.getCenter()));
  
  });
  //ultimo zoom do mapa
  map.on('zoomend', function(event) {
    localStorage.setItem('lastZoomMap', map.getZoom());
  });

} 

//cria as tiles do mapa
L.tileLayer(`assets/include/pages/assets/img/${_TILES}/{z}_{x}_{y}.png`, {
  continuousWorld: false,
  noWrap: true,  
  minZoom: 4,
  maxZoom: 6,
}).addTo(map);





//CODE Limite do mapa

L.Map.prototype._panHardBounds = function() {
	this.panInsideBounds(this.options.maxBounds, { animate: false });
};

L.Map.prototype.addHardBounds = function() {
	this.on('drag', this._panHardBounds);
};

L.Map.prototype.removeHardBounds = function() {
	this.off('drag', this._panHardBounds);
};

map.addHardBounds();

var bounds = L.latLngBounds([[47.754098, -96.943359], [-47.219568, 97.03125]]);
map.setMaxBounds(bounds);

//INIT
activeBounds();

function activeBounds() {
  map.addHardBounds();
};

function deactivatedBounds() {
  map.removeHardBounds();
};
// final limite do mapa




(function(L) {
  /*
   * by tonekk. 2014, MIT License
   */
  L.ExtendedDivIcon = L.DivIcon.extend({
    createIcon: function(oldIcon) {
      var div = L.DivIcon.prototype.createIcon.call(this, oldIcon);
  
      if(this.options.id) {
        div.id = this.options.id;
      }

      if(this.options.style) {
        for(var key in this.options.style) {
          div.style[key] = this.options.style[key];
        }
      }
  
      return div;
    }
  });

  L.extendedDivIcon = function(options) {
    return new L.ExtendedDivIcon(options);
  }
})(window.L);



//buttonMenuMarkers
var buttonMenuMarkers = document.querySelector('#buttonMenuMarkers');
var menuMarkers = document.querySelector('#menuMarkers');
var menuMarkersclose = document.querySelector('#menuMarkers .closeIcon');

if(localStorage.getItem('menuMarkers') == 'active'){
  menuMarkers.classList.add('active');
}

buttonMenuMarkers.addEventListener('click', function(e){
  menuMarkers.classList.add('active');
  localStorage.setItem('menuMarkers', 'active');
})

menuMarkersclose.addEventListener('click', function(e){
  menuMarkers.classList.remove('active');
  localStorage.setItem('menuMarkers', 'false');
})







