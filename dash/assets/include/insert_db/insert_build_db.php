<?php

include '../../../../assets/include/config.php';

    $nome = $_POST['nome'];
    $arma_1 = $_POST['arma_1'];
    $arma_2 = $_POST['arma_2'];
    $arma_3 = $_POST['arma_3'];
    $a1_refina = $_POST['a1_refina'];
    $a2_refina = $_POST['a2_refina'];
    $a3_refina = $_POST['a3_refina'];

    //ROW1
    $row1_flor = $_POST['row1_flor'];
    $row1_flor_attr = $_POST['row1_flor_attr'];
    $row1_flor_subattr1 = $_POST['row1_flor_subattr1'];
    $row1_flor_subattr2 = $_POST['row1_flor_subattr2'];
    $row1_flor_subattr3 = $_POST['row1_flor_subattr3'];
    $row1_flor_subattr4 = $_POST['row1_flor_subattr4'];
    $row1_flor_star = $_POST['row1_flor_star'];

    $row1_pena = $_POST['row1_pena'];
    $row1_pena_attr = $_POST['row1_pena_attr'];
    $row1_pena_subattr1 = $_POST['row1_pena_subattr1'];
    $row1_pena_subattr2 = $_POST['row1_pena_subattr2'];
    $row1_pena_subattr3 = $_POST['row1_pena_subattr3'];
    $row1_pena_subattr4 = $_POST['row1_pena_subattr4'];
    $row1_pena_star = $_POST['row1_pena_star'];

    $row1_ampulheta = $_POST['row1_ampulheta'];
    $row1_ampulheta_attr = $_POST['row1_ampulheta_attr'];
    $row1_ampulheta_subattr1 = $_POST['row1_ampulheta_subattr1'];
    $row1_ampulheta_subattr2 = $_POST['row1_ampulheta_subattr2'];
    $row1_ampulheta_subattr3 = $_POST['row1_ampulheta_subattr3'];
    $row1_ampulheta_subattr4 = $_POST['row1_ampulheta_subattr4'];
    $row1_ampulheta_star = $_POST['row1_ampulheta_star'];

    $row1_taça = $_POST['row1_taça'];
    $row1_taça_attr = $_POST['row1_taça_attr'];
    $row1_taça_subattr1 = $_POST['row1_taça_subattr1'];
    $row1_taça_subattr2 = $_POST['row1_taça_subattr2'];
    $row1_taça_subattr3 = $_POST['row1_taça_subattr3'];
    $row1_taça_subattr4 = $_POST['row1_taça_subattr4'];
    $row1_taça_star = $_POST['row1_taça_star'];

    $row1_coroa = $_POST['row1_coroa'];
    $row1_coroa_attr = $_POST['row1_coroa_attr'];
    $row1_coroa_subattr1 = $_POST['row1_coroa_subattr1'];
    $row1_coroa_subattr2 = $_POST['row1_coroa_subattr2'];
    $row1_coroa_subattr3 = $_POST['row1_coroa_subattr3'];
    $row1_coroa_subattr4 = $_POST['row1_coroa_subattr4'];
    $row1_coroa_star = $_POST['row1_coroa_star'];

    $row1_c1 = $_POST['row1_c1'];
    $row1_c1_2peças = $_POST['row1_c1_2peças'];
    $row1_c1_4peças = $_POST['row1_c1_4peças'];

    $row1_c2 = $_POST['row1_c2'];
    $row1_c2_2peças = $_POST['row1_c2_2peças'];
    $row1_c2_4peças = $_POST['row1_c2_4peças'];
    //ROW2
    $row2_flor = $_POST['row2_flor'];
    $row2_flor_attr = $_POST['row2_flor_attr'];
    $row2_flor_star = $_POST['row2_flor_star'];

    $row2_pena = $_POST['row2_pena'];
    $row2_pena_attr = $_POST['row2_pena_attr'];
    $row2_pena_star = $_POST['row2_pena_star'];

    $row2_ampulheta = $_POST['row2_ampulheta'];
    $row2_ampulheta_attr = $_POST['row2_ampulheta_attr'];
    $row2_ampulheta_star = $_POST['row2_ampulheta_star'];

    $row2_taça = $_POST['row2_taça'];
    $row2_taça_attr = $_POST['row2_taça_attr'];
    $row2_taça_star = $_POST['row2_taça_star'];

    $row2_coroa = $_POST['row2_coroa'];
    $row2_coroa_attr = $_POST['row2_coroa_attr'];
    $row2_coroa_star = $_POST['row2_coroa_star'];

    $row2_c1 = $_POST['row2_c1'];
    $row2_c1_2peças = $_POST['row2_c1_2peças'];
    $row2_c1_4peças = $_POST['row2_c1_4peças'];

    $row2_c2 = $_POST['row2_c2'];
    $row2_c2_2peças = $_POST['row2_c2_2peças'];
    $row2_c2_4peças = $_POST['row2_c2_4peças'];

    //ROW3
    $row3_flor = $_POST['row3_flor'];
    $row3_flor_attr = $_POST['row3_flor_attr'];
    $row3_flor_star = $_POST['row3_flor_star'];

    $row3_pena = $_POST['row3_pena'];
    $row3_pena_attr = $_POST['row3_pena_attr'];
    $row3_pena_star = $_POST['row3_pena_star'];

    $row3_ampulheta = $_POST['row3_ampulheta'];
    $row3_ampulheta_attr = $_POST['row3_ampulheta_attr'];
    $row3_ampulheta_star = $_POST['row3_ampulheta_star'];

    $row3_taça = $_POST['row3_taça'];
    $row3_taça_attr = $_POST['row3_taça_attr'];
    $row3_taça_star = $_POST['row3_taça_star'];

    $row3_coroa = $_POST['row3_coroa'];
    $row3_coroa_attr = $_POST['row3_coroa_attr'];
    $row3_coroa_star = $_POST['row3_coroa_star'];

    $row3_c1 = $_POST['row3_c1'];
    $row3_c1_2peças = $_POST['row3_c1_2peças'];
    $row3_c1_4peças = $_POST['row3_c1_4peças'];

    $row3_c2 = $_POST['row3_c2'];
    $row3_c2_2peças = $_POST['row3_c2_2peças'];
    $row3_c2_4peças = $_POST['row3_c2_4peças'];

    

    

    $insert_p_db = "INSERT INTO builds SET 
       
       nome = '$nome', 
        arma_1 = '$arma_1',
        arma_2 = '$arma_2',
        arma_3 = '$arma_3',
        a1_refina = '$a1_refina',
        a2_refina = '$a2_refina',
        a3_refina = '$a3_refina',
        row1_flor = '$row1_flor',
        row1_flor_attr = '$row1_flor_attr',
        row1_flor_subattr1 = '$row1_flor_subattr1',
        row1_flor_subattr2 = '$row1_flor_subattr2',
        row1_flor_subattr3 = '$row1_flor_subattr3',
        row1_flor_subattr4 = '$row1_flor_subattr4',
        row1_flor_star = '$row1_flor_star',
        row1_pena = '$row1_pena',
        row1_pena_attr = '$row1_pena_attr',
        row1_pena_subattr1 = '$row1_pena_subattr1',
        row1_pena_subattr2 = '$row1_pena_subattr2',
        row1_pena_subattr3 = '$row1_pena_subattr3',
        row1_pena_subattr4 = '$row1_pena_subattr4',
        row1_pena_star = '$row1_pena_star',
        row1_ampulheta = '$row1_ampulheta',
        row1_ampulheta_attr = '$row1_ampulheta_attr',
        row1_ampulheta_subattr1 = '$row1_ampulheta_subattr1',
        row1_ampulheta_subattr2 = '$row1_ampulheta_subattr2',
        row1_ampulheta_subattr3 = '$row1_ampulheta_subattr3',
        row1_ampulheta_subattr4 = '$row1_ampulheta_subattr4',
        row1_ampulheta_star = '$row1_ampulheta_star',
        row1_taça = '$row1_taça',
        row1_taça_attr = '$row1_taça_attr',
        row1_taça_subattr1 = '$row1_taça_subattr1',
        row1_taça_subattr2 = '$row1_taça_subattr2',
        row1_taça_subattr3 = '$row1_taça_subattr3',
        row1_taça_subattr4 = '$row1_taça_subattr4',
        row1_taça_star = '$row1_taça_star',
        row1_coroa = '$row1_coroa',
        row1_coroa_attr = '$row1_coroa_attr',
        row1_coroa_subattr1 = '$row1_coroa_subattr1',
        row1_coroa_subattr2 = '$row1_coroa_subattr2',
        row1_coroa_subattr3 = '$row1_coroa_subattr3',
        row1_coroa_subattr4 = '$row1_coroa_subattr4',
        row1_coroa_star = '$row1_coroa_star',
        row1_c1 = '$row1_c1',
        row1_c1_2peças = '$row1_c1_2peças',
        row1_c1_4peças = '$row1_c1_4peças',
        row1_c2 = '$row1_c2',
        row1_c2_2peças = '$row1_c2_2peças',
        row1_c2_4peças = '$row1_c2_4peças',
        
        row2_flor = '$row2_flor',
        row2_flor_attr = '$row2_flor_attr',
        row2_flor_star = '$row2_flor_star',
        row2_pena = '$row2_pena',
        row2_pena_attr = '$row2_pena_attr',
        row2_pena_star = '$row2_pena_star',
        row2_ampulheta = '$row2_ampulheta',
        row2_ampulheta_attr = '$row2_ampulheta_attr',
        row2_ampulheta_star = '$row2_ampulheta_star',
        row2_taça = '$row2_taça',
        row2_taça_attr = '$row2_taça_attr',
        row2_taça_star = '$row2_taça_star',
        row2_coroa = '$row2_coroa',
        row2_coroa_attr = '$row2_coroa_attr',
        row2_coroa_star = '$row2_coroa_star',
        row2_c1 = '$row2_c1',
        row2_c1_2peças = '$row2_c1_2peças',
        row2_c1_4peças = '$row2_c1_4peças',
        row2_c2 = '$row2_c2',
        row2_c2_2peças = '$row2_c2_2peças',
        row2_c2_4peças = '$row2_c2_4peças',

        row3_flor = '$row3_flor',
        row3_flor_attr = '$row3_flor_attr',
        row3_flor_star = '$row3_flor_star',
        row3_pena = '$row3_pena',
        row3_pena_attr = '$row3_pena_attr',
        row3_pena_star = '$row3_pena_star',
        row3_ampulheta = '$row3_ampulheta',
        row3_ampulheta_attr = '$row3_ampulheta_attr',
        row3_ampulheta_star = '$row3_ampulheta_star',
        row3_taça = '$row3_taça',
        row3_taça_attr = '$row3_taça_attr',
        row3_taça_star = '$row3_taça_star',
        row3_coroa = '$row3_coroa',
        row3_coroa_attr = '$row3_coroa_attr',
        row3_coroa_star = '$row3_coroa_star',
        row3_c1 = '$row3_c1',
        row3_c1_2peças = '$row3_c1_2peças',
        row3_c1_4peças = '$row3_c1_4peças',
        row3_c2 = '$row3_c2',
        row3_c2_2peças = '$row3_c2_2peças',
        row3_c2_4peças = '$row3_c2_4peças'

        ";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        document.querySelector("#add_build .success").innerHTML= "Build do personagem <strong>'.$nome.'</strong> adicionado com Sucesso!";
        $("#builds_selected").load("assets/include/edit_db/builds/select_builds_db.php");
        $("#add_build form")[0].reset();
        setTimeout(function(){
            document.querySelector("#add_build .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#add_build .error").innerHTML= "Erro ao inserir build!";
        setTimeout(function(){
            document.querySelector("#add_build .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       