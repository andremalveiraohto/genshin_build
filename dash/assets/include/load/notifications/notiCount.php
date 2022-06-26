<?php

include '../../../../../assets/include/config.php';

    //=====INCLUDE DA TABELA feedback
    $feedbacks = "SELECT * FROM feedbacks WHERE status = 'pendente' ";
    $feedbacks = $pdo->query($feedbacks);
   
   $notiCount = array('notiCount' => 0);

    if($feedbacks->rowCount() > 0){
        $notiCount['notiCount'] = $feedbacks->rowCount();
    }

    echo json_encode($notiCount);
    exit;