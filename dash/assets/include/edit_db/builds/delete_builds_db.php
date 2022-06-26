<?php

include '../../../../../assets/include/config.php';

    $id = $_POST['id']; 
   
       // SELECIONAR ARMA ONDE ID FOR IGUAR A $id
       $table_builds = "SELECT * FROM builds WHERE id = '$id'";
       $table_builds = $pdo->query($table_builds);
       $build = $table_builds->fetch();

    $insert_p_db = "DELETE FROM builds WHERE id = '$id'";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        $("input, select, textarea").val("");
        document.querySelector("#edit_build .success").innerHTML= "Build <strong>'.$build['nome'].'</strong> deletado com sucesso!!";
        $("#builds_selected").load("assets/include/edit_db/builds/select_builds_db.php");
        setTimeout(function(){
            document.querySelector("#edit_build .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#edit_build .error").innerHTML= "Erro ao deletar a Build Selecionada!";
        setTimeout(function(){
            document.querySelector("#edit_build .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       