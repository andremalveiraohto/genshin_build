<?php

include '../../../../../assets/include/config.php';

        $id = $_POST['id'];
        $conjunto = $_POST['conjunto'];
        $flor = $_POST['flor'];
        $pena = $_POST['pena'];
        $ampulheta = $_POST['ampulheta'];
        $taça = $_POST['taça'];
        $coroa = $_POST['coroa'];
        $_1_peças = $_POST['1_peças'];
        $_2_peças = $_POST['2_peças'];
        $_4_peças = $_POST['4_peças'];

    

    $insert_p_db = "UPDATE conjuntos SET 
       
        conjunto = '$conjunto', 
        flor = '$flor',
        pena = '$pena',
        ampulheta = '$ampulheta',
        taça = '$taça',
        coroa = '$coroa',
        1_peças = '$_1_peças',
        2_peças = '$_2_peças',
        4_peças = '$_4_peças'

        WHERE id = '$id'
        ";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        $("input, select, textarea").val("");
        document.querySelector("#edit_conjunto .success").innerHTML= "Conjunto <strong>'.$conjunto.'</strong> editado no Banco de Dados com Sucesso!";
        $("#conj_selected").load("assets/include/edit_db/conjuntos/select_conj_db.php");
        setTimeout(function(){
            document.querySelector("#edit_conjunto .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#edit_conjunto .error").innerHTML= "Erro ao editar Conjunto no Banco de Dados!";
        setTimeout(function(){
            document.querySelector("#edit_conjunto .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       