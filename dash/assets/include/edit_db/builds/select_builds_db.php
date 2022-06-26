<?php include '../../../../../assets/include/config.php'; ?>

<option class="dp_n" value >Selecionar Build</option>
<?php
    foreach($builds as $build) {
        echo'<option value="'.$build['id'].'">'.ucfirst($build['nome']).'</option>';
    }
?>