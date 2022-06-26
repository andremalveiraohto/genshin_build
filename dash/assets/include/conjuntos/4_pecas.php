<?php
    echo "<option data-conjunto='' value='' selected style='display: none;'>4 Peças</option>";
foreach ($conjunto as  $key => $conjuntos) {
    if( $key >= 14 && $key <=17){} else {
        echo "<option data-conjunto='{$key}' value='{$key}' >{$key} - {$conjuntos['4_peças']}</option>";}
}

?>