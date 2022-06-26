<div class="menuMarkers">

    <div class="topTitleClose">
        <div class="title">
            <div class="icon"><img src="assets/include/pages/assets/img/menuLight.png"></div>
            <h1>Menu</h1>
        </div>
        <div class="closeIcon">
            <div class="icon"></div>
        </div>
    </div>
    <div class="contents">
        <div class="contentsBorder pdd">

            <?php foreach($map_tipoGrupos as $tipoGrupos){

                $tipo = $tipoGrupos['value'];

                $table_map_grupos = "SELECT * FROM map_grupos WHERE tipo='$tipo' GROUP BY grupo ";
                $table_map_grupos = $pdo->query($table_map_grupos);
                $map_grupos = $table_map_grupos->fetchAll();

                $countMarcadores = "SELECT * FROM map_marcadores WHERE tipo='$tipo'";
                $countMarcadores = $pdo->query($countMarcadores);
                $countGrupos = $countMarcadores->rowCount();

                if($countGrupos >= 1){
                    echo'<div class="contentBox">
                        <h4 id="'.$tipo.'" class="titleContentBox" >'.$tipoGrupos['title'].'</h4>
                        <div class="contentsCard flexWrap">';

                        foreach($map_grupos as $grupos) {                   
                        
                            $grupo = $grupos['grupo'];

                            $countMarcadores = "SELECT * FROM map_marcadores WHERE grupo='$grupo'";
                            $countMarcadores = $pdo->query($countMarcadores);
                            $countGrupos = $countMarcadores->rowCount();

                            if($countGrupos >= 1){
                                echo'
                                <div id="'.$grupos['grupo'].'" class="markerCard" title="'.$grupos['title'].'">
                                    <div class="borderCard"></div>
                                    <div class="iconGrupoM '; 
                                    
                                    if($grupos['is_item'] == 'false'){
                                        echo'no ';
                                    }
                                    
                                    echo'borderRadius" style="background: url(assets/include/pages/assets/img/iconsMap/'.$grupos['grupo'].'.png);"></div>
                                </div>
                                ';
                            }
                            
                        };     
                        echo'
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
    </div>
    <div class="error"></div>
    <div class="barEdit">
        <div id="" class="delMarker" title="Excluir Marcador"></div>
    </div>

</div>

<script>

var markerCard = document.querySelectorAll('#menuMarkers .markerCard');
var viewMarker = JSON.parse(localStorage.getItem('viewMarker') || '[]');


function checkMarkerLocalStorage(){

    Array.prototype.forEach.call (viewMarker, function (ArraymarkerCheck) {
        var Namegrupo = ArraymarkerCheck['allMarkers'];
        var valueDisplay = ArraymarkerCheck['display'];

        var allNamesG = document.querySelectorAll(`#map .leaflet-marker-pane .${Namegrupo}`);
        var idMarker = document.querySelector(`#menuMarkers #${Namegrupo}`);

        if(idMarker){idMarker.classList.add('selected');}

        allNamesG.forEach(function(item){
            item.style.display=valueDisplay;
        });

    });
}

Array.prototype.forEach.call (markerCard, function (markerCardClick) {
    var markerCheck = true;

    markerCardClick.addEventListener('click', function(){
        var id = this.attributes['id'].value;
        var This = this;

        var allMarkers = document.querySelectorAll(`#map .leaflet-marker-pane .${id}`);
        var valueDisplay = '';

        function InsertItemLocalStorage() {
            This.classList.add('selected');

            valueDisplay = 'flex';
            Array.prototype.forEach.call (allMarkers, function (marker) {
                marker.style.display=valueDisplay;
            }); 

            viewMarker.push({
                allMarkers: id,
                display: valueDisplay
            });
            localStorage.setItem("viewMarker", JSON.stringify(viewMarker));  
        }

        function RemoveItemLocalStorage() {
            This.classList.remove('selected');

            valueDisplay = '';
            Array.prototype.forEach.call (allMarkers, function (marker) {
                marker.style.display=valueDisplay;
            }); 

            viewMarker = JSON.parse(localStorage.getItem('viewMarker')).filter(item => item.allMarkers !== id)
            localStorage.setItem('viewMarker', JSON.stringify(viewMarker)); 
        }

        function verificaidLocalStorage() {
            //verifica se o ID/item já existe no localstorage
            var keys = Object.keys(viewMarker)
            for (key in keys){
                if (viewMarker[keys[key]].allMarkers == id){
                    itemExist = true;
                } 
            } 
        }

        verificaidLocalStorage();
        if(itemExist == true){
            markerCheck = false;
        } else {
            markerCheck = true;
        }



        if(markerCheck == true){
            markerCheck = false;
            var itemExist = false;
            //se viewMarker em Localstorage for vazio ele insere o item
            if(viewMarker == ''){
                InsertItemLocalStorage(); 
            } else {
                verificaidLocalStorage();
                if(itemExist == true){
                    RemoveItemLocalStorage();
                } else {
                    InsertItemLocalStorage(); 
                }

            }
        } else {
            RemoveItemLocalStorage();
            markerCheck = true;

        }

    });

} );



</script>