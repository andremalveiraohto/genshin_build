<?php

include '../../../../../assets/include/config.php';


    $id_name = $_POST['id_name'];
    $name = $_POST['name'];
    $gems = $_POST['gems'];
    $nivel = $_POST['nivel'];
    $id_url = $_POST['id_url'];
    $objetivo = $_POST['objetivo'];

    $insert_p_db = "UPDATE conquistas_data SET 
       
       name = '$name',
       gems = '$gems',
       nivel = '$nivel',
       id_url = '$id_url',
       objetivo = '$objetivo',
       data = '$hoje'

       WHERE id = '$id_name'

        ";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        document.querySelector("#edit_conqs .success").innerHTML= "Conquista editada com Sucesso!";
        $("input, select, textarea").val("");
        $("#id_name option").remove();
        setTimeout(function(){
            document.querySelector("#edit_conqs .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#edit_conqs .error").innerHTML= "Erro ao editar conquista!";
        setTimeout(function(){
            document.querySelector("#edit_conqs .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       