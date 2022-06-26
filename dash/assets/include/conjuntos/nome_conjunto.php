<?php
foreach ($conjunto as $key => $conjuntos) {
    if( $key >= 14 && $key <=17){} else {
    echo "<option value='{$key}' >{$key} - {$conjuntos['Conjunto']}</option>";}
}

?>