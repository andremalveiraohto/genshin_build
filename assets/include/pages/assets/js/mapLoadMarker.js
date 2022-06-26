

//loadInsert_Marker

function loadInsertMarker() {
    $('#barRight').load('assets/include/pages/assets/include/form_insert_marker.php');
    if(active == false){
        setTimeout(function(){
            openBarRight();
        },70);
    }
}

function removeInsertMarker() {
    if(document.querySelector('#barRight .barRight')){
        document.querySelector('#barRight .barRight').remove();}
    if(document.querySelector('#barRight script')){
        document.querySelector('#barRight script').remove();}

    if(document.querySelector('#map .leaflet-marker-icon.point')){
        document.querySelector('#map .leaflet-marker-icon.point').remove();}
    if(document.querySelector('#map .pointpopup')){
        document.querySelector('#map .pointpopup').remove();}

    localStorage.setItem('markerCheck', 'false');
    document.querySelector('.buttonCheck #marker').checked = false;

    pointActive = true;
    ifMarker = false;
}

    var marker = document.querySelector('.buttonCheck #marker');

    var ifMarker;

    if(localStorage.getItem('markerCheck') == 'true'){
    marker.checked = true;
     loadInsertMarker();
    ifMarker = true;
    }

    marker.addEventListener('click', function(){

        if(ifMarker == true){
            localStorage.setItem('markerCheck', 'false');
            removeInsertMarker()
        } else {
            localStorage.setItem('markerCheck', 'true');
             loadInsertMarker();
            ifMarker = true;
        }

    });

