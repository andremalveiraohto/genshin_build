<?php
    $id_name = '';
    
    if(!empty($_POST['id_name'])){

        $id_name = ($_POST['id_name']);
        include '../../../../../assets/include/config.php';
        
    }

    $table_conqs_data  = "SELECT * FROM conquistas_data WHERE id = '$id_name'";
    $table_conqs_data  = $pdo->query($table_conqs_data );
    $conqs_data  = $table_conqs_data ->fetch();




echo'
        <div class="row margin_bottom_25px">
            <div class="col-sm">
                <input name="name" type="text" value="'.$conqs_data['name'].'" class="form-control"  placeholder="Nome">
            </div>
            <div class="col-sm">
                <input name="gems" type="text" value="'.$conqs_data['gems'].'" class="form-control gems"  placeholder="Quantidade Gemas">
            </div>
            <div class="col-sm">
                <select name="nivel" type="text"class="form-control">
                <option class="dp_n" value="'.$conqs_data['nivel'].'">';
                if(empty($conqs_data['nivel'])){echo'Nivel';} else {echo $conqs_data['nivel'].' Nivel';}
                echo'</option>
                <option value="1">1 Nível</option>
                <option value="3">3 Nível</option>
                </select>
            </div>
            <div class="col-sm">
                <input name="id_url" type="text" value="'.$conqs_data['id_url'].'" class="form-control"  placeholder="ID URL Vídeo">
            </div>
        </div>
        <div class="row margin_bottom_25px">
            <div class="col-sm">
                <textarea name="objetivo" type="text" value="" class="form-control" style="height: 101px;" placeholder="Objetivo">'.$conqs_data['objetivo'].'</textarea>
            </div>
        </div>
';

?>