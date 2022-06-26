
//functionOpenClose
var active = false;
function openBarRight() {document.querySelector('#barRight').classList.add('active');}
function closeBarRight() {document.querySelector('#barRight').classList.remove('active');
}

function loadMarkers() {
    $('#markers').load('assets/include/pages/assets/include/load_marker.php');  
}
loadMarkers();

function removeMarkers() {
    document.querySelectorAll('.leaflet-marker-icon.marcador').forEach(function(markers){
        markers.remove();
    });
}

function removemarkerSelected() {
    var markerSelected = document.querySelector('.leaflet-marker-icon.marcador .markerSelected');
    if(markerSelected){
        markerSelected.remove();
    }
}


function loadClickDatakMarker() {
    //clickMarker// loadDataMarke
    document.querySelectorAll('.leaflet-marker-icon.marcador').forEach(function(img){
        img.addEventListener('click', function(){

            if(block_Aud == true){click_marker_map.play();}
            
            removemarkerSelected();
            this.innerHTML='<div class="markerSelected"></div>';

            var id_marker = this.attributes["id"].value;
            closeBarRight();
            $('#barRight').load('assets/include/pages/assets/include/data_marker.php', {id_marker:id_marker}); 
        //openClose
        if(active == false){
            setTimeout(function(){
                openBarRight();
            },70);
        }
        });
    });
}






