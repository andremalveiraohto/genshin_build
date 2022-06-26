<?php include '../../../../../assets/include/config.php'; ?>

<option class="dp_n" value >Selecionar Conjunto</option>
<?php
    foreach($conjuntos as $conjunto) {
        echo'<option value="'.$conjunto['id'].'">'.ucfirst($conjunto['conjunto']).'</option>';
    }
?>