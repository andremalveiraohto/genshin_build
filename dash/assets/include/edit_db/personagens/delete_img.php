<?php

$delete_img = '../../../../'.$_POST['delete_img'];


if(unlink($delete_img)){
    echo'<script>
    document.querySelector("#edit_personagem .success").innerHTML= "Imagem deletada!";
    var value_selected = document.querySelector("#p_selected").value;
    $("#edit_personagem #viewer_img_p_db").load("assets/include/edit_db/personagens/viewer_img_p_db.php", {id:value_selected});
    setTimeout(function(){
        document.querySelector("#edit_personagem .success").innerHTML= "";
    }, 5000);
    </script>';
} 