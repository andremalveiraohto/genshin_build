<?php

include '../../../../assets/include/config.php';


    //=====INCLUDE DA TABELA META
    $name_meta = "SELECT * FROM meta ";
    $name_meta = $pdo->query($name_meta);
    $name_meta = $name_meta->fetchAll();

    foreach($name_meta as $meta){

        $meta_nome = $meta['nome'];
        $meta_text = $_POST[$meta_nome];

        if(!empty($meta_text)){ 
            $table_meta = "UPDATE meta SET text = '$meta_text' WHERE nome = '$meta_nome'  ";
            $pdo->query($table_meta);
         };


    }


