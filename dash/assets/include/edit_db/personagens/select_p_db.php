<?php include '../../../../../assets/include/config.php'; ?>

<option class="dp_n" value >Selecionar Personagem</option>
<?php
    foreach($personagens as $personagem) {
        echo'<option value="'.$personagem['id'].'">'.ucfirst($personagem['nome']).'</option>';
    }
?>