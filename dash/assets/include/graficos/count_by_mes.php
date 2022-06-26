<?php

include '../../../../assets/include/config.php';


// INSERE VISITAS POR MES NA TABELA visitas_by_mes
$count_by_mes = $data_mes->rowCount();
$select_by_mes = "SELECT * FROM visitas_by_mes WHERE mes='$mes' ";
$select_by_mes = $pdo->query($select_by_mes);
$by_mes = $select_by_mes->rowCount();

if($by_mes == 0){
    $insert_count_by_mes = "INSERT INTO visitas_by_mes SET mes='$mes', visitas='$count_by_mes' ";
    $pdo->query($insert_count_by_mes);
} else {
    $insert_count_by_mes = "UPDATE visitas_by_mes SET mes='$mes', visitas='$count_by_mes' WHERE mes='$mes' ";
    $pdo->query($insert_count_by_mes);
}

//=====INCLUDE DA TABELA visitas_by_mes
$table_count_visit = "SELECT * FROM visitas_by_mes ORDER BY ID DESC LIMIT 12";
$table_count_visit = $pdo->query($table_count_visit);


while($results = $table_count_visit->fetch(PDO::FETCH_ASSOC)) {

    $result[] = $results;

    $result_order_invers = array_reverse($result); //inverte a order o array
}

echo json_encode($result_order_invers); 