<?php
    echo "<option data-conjunto='' value='' selected style='display: none;'>1 Peça</option>";
    foreach(array_slice($conjunto, 13, -14, true) as $key => $conjuntos){ 
        echo "<option data-conjunto='{$key}' value='{$key}' >{$key} - {$conjuntos['1_peças']}</option>";}

?>