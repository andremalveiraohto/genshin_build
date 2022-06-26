<?php
    echo '<option value="" selected style="display: none;">2 Peças</option>';
foreach ($conjunto as  $key => $conjuntos) {
    if( $key >= 14 && $key <=17){} else {
        echo "<option data-conjunto='{$key}' value='{$key}' >{$key} - {$conjuntos['2_peças']}</option>";}
}

?>

