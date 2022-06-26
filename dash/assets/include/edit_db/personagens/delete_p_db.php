<?php

include '../../../../../assets/include/config.php';

    $id = $_POST['id']; 
   
       // SELECIONAR PERSONAGEM ONDE ID FOR IGUAR A $id
       $table_personagens = "SELECT * FROM personagens WHERE id = '$id'";
       $table_personagens = $pdo->query($table_personagens);
       $personagens = $table_personagens->fetch();

    $insert_p_db = "DELETE FROM personagens WHERE id = '$id'";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        $("input, select, textarea").val("");
        document.querySelector("#edit_personagem .success").innerHTML= "Personagem <strong>'.$personagens['nome'].'</strong> Deletado do Banco de Dados com Sucesso!";
        $("#p_selected").load("assets/include/edit_db/personagens/select_p_db.php");
        setTimeout(function(){
            document.querySelector("#edit_personagem .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#edit_personagem .error").innerHTML= "Erro ao Deletar personagem no Banco de Dados!";
        setTimeout(function(){
            document.querySelector("#edit_personagem .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       