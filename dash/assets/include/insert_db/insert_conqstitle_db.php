<?php

include '../../../../assets/include/config.php';

    $title = $_POST['title'];
    $qt_conqs = $_POST['qt_conqs'];



    $insert_p_db = "INSERT INTO conquistas_title SET 
    
       title = '$title',
       qt_conqs = '$qt_conqs'

        ";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        document.querySelector("#add_conqs .success").innerHTML= "Títutlo de Conquista salva ";
        $("#id_title").load("assets/include/edit_db/conquistas/select_conqs_db.php");
        $("#insert_conqstitle_db input").val("");
        setTimeout(function(){
            document.querySelector("#add_conqs .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#add_conqs .error").innerHTML= "Erro ao salvar Títutlo de Conquista !";
        setTimeout(function(){
            document.querySelector("#add_conqs .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
       