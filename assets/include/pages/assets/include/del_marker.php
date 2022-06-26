<?php

include '../../../config.php';

    $id_marker = $_POST['id_marker']; 
   
    // INCLUDE DA TABELA MA
    $tableDataMarker = "SELECT * FROM map_marcadores WHERE id='$id_marker' ";
    $tableDataMarker = $pdo->query($tableDataMarker);
    $dataMarker = $tableDataMarker->fetchAll();

    foreach($dataMarker as $markerIMG){
        if(!empty($markerIMG['nameimg'])){

            $namesImgs = explode(', ', $markerIMG['nameimg']);
            foreach( $namesImgs as $namesImages){
                $dir_persona = '../img/iconsMap/locationImage/'.$namesImages.'';
                unlink($dir_persona); 
            }

        }
    }

    $insert_p_db = "DELETE FROM map_marcadores WHERE id = '$id_marker'";

    if($pdo->query($insert_p_db)) {
        echo'<script>removeMarkers();loadMarkers();closeBarRight();
        
            active = false;
            if(document.querySelector("#barRight .barRight")){
                setTimeout(function(){
                    document.querySelector("#barRight .barRight").remove();
                    document.querySelector("#barRight script").remove();
                    removemarkerSelected();

                },60);
            }
        </script>';
    } else {
        
        echo'<script>
       
        </script>';
    }

       