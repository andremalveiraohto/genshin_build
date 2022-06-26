<?php

include '../../../../assets/include/config.php';


    $id_title = $_POST['id_title'];
    $name = $_POST['name'];
    $gems = $_POST['gems'];
    $nivel = $_POST['nivel'];
    $id_url = $_POST['id_url'];
    $objetivo = $_POST['objetivo'];

    $insert_p_db = "INSERT INTO conquistas_data SET 
       
       id_title = '$id_title', 
       name = '$name',
       gems = '$gems',
       nivel = '$nivel',
       id_url = '$id_url',
       objetivo = '$objetivo',
       data = '$hoje'

        ";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        document.querySelector("#add_conqs .success").innerHTML= "Conquista Inserida ao Banco de Dados com Sucesso!";
        $("input, select, textarea").val("");
        setTimeout(function(){
            document.querySelector("#add_conqs .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#add_conqs .error").innerHTML= "Erro ao inserir conquista no Banco de Dados!";
        setTimeout(function(){
            document.querySelector("#add_conqs .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       