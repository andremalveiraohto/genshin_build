<?php include '../../../../../assets/include/config.php'; ?>

<option class="dp_n" value >Selecionar Título da Conquista</option>
<?php
    foreach($conqs_title as $title_conqs) {
        echo'<option value="'.$title_conqs['id'].'">'.ucfirst($title_conqs['title']).'</option>';
    }
?>