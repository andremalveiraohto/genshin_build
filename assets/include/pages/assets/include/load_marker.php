<?php
include '../../../config.php';

    // INCLUDE DA TABELA MAP_MARCADORES
    $table_map_marcadores = "SELECT * FROM map_marcadores";
    $table_map_marcadores = $pdo->query($table_map_marcadores);
    $map_marcadores = $table_map_marcadores->fetchAll();


      echo'<script>';
        foreach($map_marcadores as $markers){

          $grupo = $markers['grupo'];

          $table_map_grupos = "SELECT * FROM map_grupos WHERE grupo='$grupo'";
          $table_map_grupos = $pdo->query($table_map_grupos);
          $map_grupos = $table_map_grupos->fetch();
          
          if(!empty($markers['coord']) && !empty($markers['grupo']) ){
            echo'L.marker(['.$markers['coord'].'], { icon: L.extendedDivIcon({className: "marcador '.$markers['grupo'].' '.$map_grupos['tipo'].'",id: '.$markers['id'].'})}).addTo(map);';
          }
        }
        
      echo'</script>';

?> 
<div>
  <script>
    var checkedMarkers = JSON.parse(localStorage.getItem('checkedMarkers') || '[]');
    function checkItemChecked(){
        Array.prototype.forEach.call (checkedMarkers, function (ArraymarkerCheck) {
            var allMarkerID = ArraymarkerCheck['markerID'];
            var checkedMarkerClass = ArraymarkerCheck['status'];


              document.getElementById(`${allMarkerID}`).classList.add(checkedMarkerClass);


        });
    }
  checkItemChecked(),checkMarkerLocalStorage(), loadClickDatakMarker();
  </script>
</div>