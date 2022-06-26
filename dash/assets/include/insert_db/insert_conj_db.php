<?php

include '../../../../assets/include/config.php';

    $conjunto = $_POST['conjunto'];
    $flor = $_POST['flor'];
    $pena = $_POST['pena'];
    $ampulheta = $_POST['ampulheta'];
    $taça = $_POST['taça'];
    $coroa = $_POST['coroa'];
    $_1_peças = $_POST['1_peças'];
    $_2_peças = $_POST['2_peças'];
    $_4_peças = $_POST['4_peças'];

    $_3 = $_POST['3'];
    $_4 = $_POST['4'];
    $_5 = $_POST['5'];

    

    $insert_p_db = "INSERT INTO conjuntos SET 
       
       conjunto = '$conjunto', 
       flor = '$flor',
       pena = '$pena',
       ampulheta = '$ampulheta',
       taça = '$taça',
       coroa = '$coroa',
       1_peças = '$_1_peças',
       2_peças = '$_2_peças',
       4_peças = '$_4_peças',
       3star = '$_3',
       4star = '$_4',
       5star = '$_5'

        ";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        document.querySelector("#add_conjunto .success").innerHTML= "Conjunto de Artefato Inserido ao Banco de Dados com Sucesso!";
        $("#conj_selected").load("assets/include/edit_db/conjuntos/select_conj_db.php");
        $("#add_conjunto form")[0].reset();
        setTimeout(function(){
            document.querySelector("#add_conjunto .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#add_conjunto .error").innerHTML= "Erro ao inserir conjunto de artefatos no Banco de Dados!";
        setTimeout(function(){
            document.querySelector("#add_conjunto .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       