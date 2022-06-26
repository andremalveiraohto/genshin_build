<?php
/* include '../config.php';  */
include 'class_count_visit.php';

//EXECUÇÃO
// Block_Cv
    //=====INCLUDE DA TABELA BLOCKS
    $table_block = "SELECT * FROM blocks WHERE nome = 'block_Cv'";
    $table_block = $pdo->query($table_block);
    $block_Cv = $table_block->fetch();
    $block_Cv = $block_Cv['valor'];

if($block_Cv == 'true'){
    $Visitas=new ClassVisitas();
    $Visitas->VerificaUsuario();
} 




