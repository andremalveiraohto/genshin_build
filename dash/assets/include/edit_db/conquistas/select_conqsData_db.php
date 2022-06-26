<?php include '../../../../../assets/include/config.php'; 

$id_title = $_POST['id_title'];

        // INCLUDE DA TABELA CONQUISTAS DATA
        $table_conqs_data = "SELECT * FROM conquistas_data WHERE id_title='$id_title' ";
        $table_conqs_data = $pdo->query($table_conqs_data);
        $conqs_data = $table_conqs_data->fetchAll();
        
?>


<option class="dp_n" value >Selecionar Conquista</option>
<?php
    foreach($conqs_data as $data_conqs) {
        echo'<option value="'.$data_conqs['id'].'">'.ucfirst($data_conqs['name']).'</option>';
    }
?>