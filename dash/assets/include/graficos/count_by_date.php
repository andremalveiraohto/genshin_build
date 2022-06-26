<?php

include '../../../../assets/include/config.php';



// INSERE VISITAS POR DATA NA TABELA visitas_by_date
$count_by_date = $data_hoje->rowCount();

$select_by_date = "SELECT * FROM visitas_by_date WHERE data='$hoje' ";
$select_by_date = $pdo->query($select_by_date);

$by_date = $select_by_date->rowCount();

if($by_date == 0){

    $insert_count_by_date = "INSERT INTO visitas_by_date SET data='$hoje', visitas='$count_by_date' ";
    $pdo->query($insert_count_by_date);
    
} else {

    $insert_count_by_date = "UPDATE visitas_by_date SET data='$hoje', visitas='$count_by_date' WHERE data='$hoje' ";
    $pdo->query($insert_count_by_date);

}

    //=====INCLUDE DA TABELA visitas_by_date
    $table_count_visit = "SELECT * FROM visitas_by_date ORDER BY ID DESC LIMIT 5";
    $table_count_visit = $pdo->query($table_count_visit);
 

    while($results = $table_count_visit->fetch(PDO::FETCH_ASSOC)) {

        $result[] = $results;

       $result_order_invers = array_reverse($result); //inverte a order o array
    }
    
  echo json_encode($result_order_invers); 