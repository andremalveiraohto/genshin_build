<?php

include '../../../../assets/include/config.php';



    foreach($block as $key => $nameBlocks){  


        $block_nome = $nameBlocks['nome'];
        $block_valor = $_POST[$block_nome];

        if(!empty($block_valor)){ 
            $table_meta = "UPDATE blocks SET valor = '$block_valor' WHERE nome = '$block_nome'  ";
            $pdo->query($table_meta);
         };

    }


    //EDIT FONTS  
    $edit_font = $_POST['edit_font'];

    if(!empty($edit_font)){ 
        $table_fonts = "UPDATE fonts SET dir = '$edit_font' WHERE nome = 'edit_font'  ";
        $pdo->query($table_fonts);
        };