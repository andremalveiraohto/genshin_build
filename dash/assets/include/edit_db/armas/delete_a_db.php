<?php

include '../../../../../assets/include/config.php';

    $id = $_POST['id']; 
   
       // SELECIONAR ARMA ONDE ID FOR IGUAR A $id
       $table_armas = "SELECT * FROM armas WHERE id = '$id'";
       $table_armas = $pdo->query($table_armas);
       $armas = $table_armas->fetch();

    $insert_p_db = "DELETE FROM armas WHERE id = '$id'";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        $("input, select, textarea").val("");
        document.querySelector("#edit_arma .success").innerHTML= "Arma <strong>'.$armas['nome'].'</strong> Deletada do Banco de Dados com Sucesso!";
        $("#a_selected").load("assets/include/edit_db/armas/select_a_db.php");
        setTimeout(function(){
            document.querySelector("#edit_arma .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#edit_arma .error").innerHTML= "Erro ao deletar arma no Banco de Dados!";
        setTimeout(function(){
            document.querySelector("#edit_arma .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       