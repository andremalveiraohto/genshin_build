<?php

include '../../../../assets/include/config.php';

    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $atributo_1 = $_POST['atributo_1'];
    $atributo_1_valor = $_POST['atributo_1_valor'];
    $atributo_2 = $_POST['atributo_2'];
    $atributo_2_valor = $_POST['atributo_2_valor'];
    $star = $_POST['star'];
    $nivel = $_POST['nivel'];
    $titulo_habilidade = $_POST['titulo_habilidade'];

    $refina_1 = $_POST['refina_1'];
    $refina_2 = $_POST['refina_2'];
    $refina_3 = $_POST['refina_3'];
    $refina_4 = $_POST['refina_4'];
    $refina_5 = $_POST['refina_5'];


    

    $insert_p_db = "INSERT INTO armas SET 
       
        tipo = '$tipo', 
        nome = '$nome', 
        atributo_1 = '$atributo_1',
        atributo_1_valor = '$atributo_1_valor',
        atributo_2 = '$atributo_2',
        atributo_2_valor = '$atributo_2_valor',
        star = '$star',
        nivel = '$nivel',
        titulo_habilidade = '$titulo_habilidade',
        refina_1 = '$refina_1',
        refina_2 = '$refina_2',
        refina_3 = '$refina_3',
        refina_4 = '$refina_4',
        refina_5 = '$refina_5'
        
        ";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        document.querySelector("#add_arma .success").innerHTML= "Arma <strong>'.$nome.'</strong> Inserida ao Banco de Dados com Sucesso!";
        $("#a_selected").load("assets/include/edit_db/armas/select_a_db.php");
        $("#add_arma form")[0].reset();
        setTimeout(function(){
            document.querySelector("#add_arma .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#add_arma .error").innerHTML= "Erro ao inserir Arma ao Banco de Dados!";
        setTimeout(function(){
            document.querySelector("#add_arma .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       