<?php include '../../../../../assets/include/config.php'; ?>

<option class="dp_n" value >Selecionar Arma</option>
<?php
    foreach($armas as $arma) {
        echo'<option value="'.$arma['id'].'">'.ucfirst($arma['nome']).'</option>';
    }
?>