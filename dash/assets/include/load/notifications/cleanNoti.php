<?php

include '../../../../../assets/include/config.php';

    //=====INCLUDE DA TABELA FEEDBACKS
    $feedbacks = "UPDATE feedbacks SET status = 'visualizado' WHERE status = 'pendente' ";
    $feedbacks = $pdo->query($feedbacks);
