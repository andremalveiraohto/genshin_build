<?php

include '../../../../../assets/include/config.php';

    $id = $_POST['id']; 
   
       // SELECIONAR ARMA ONDE ID FOR IGUAR A $id
       $table_conjuntos = "SELECT * FROM conjuntos WHERE id = '$id'";
       $table_conjuntos = $pdo->query($table_conjuntos);
       $conjuntos = $table_conjuntos->fetch();

    $insert_p_db = "DELETE FROM conjuntos WHERE id = '$id'";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        $("input, select, textarea").val("");
        document.querySelector("#edit_conjunto .success").innerHTML= "Conjunto <strong>'.$conjuntos['conjunto'].'</strong> Deletado do Banco de Dados com Sucesso!";
        $("#conj_selected").load("assets/include/edit_db/conjuntos/select_conj_db.php");
        setTimeout(function(){
            document.querySelector("#edit_conjunto .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#edit_conjunto .error").innerHTML= "Erro ao deletar Conjunto no Banco de Dados!";
        setTimeout(function(){
            document.querySelector("#edit_conjunto .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       