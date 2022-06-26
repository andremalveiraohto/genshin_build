<?php

include '../../../../../assets/include/config.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $title = $_POST['title'];
    $elemento = $_POST['elemento'];
    $star = $_POST['star'];
    $arma = $_POST['arma'];
    $niver = $_POST['niver'];
    $afiliação = $_POST['afiliação'];
    $constelação = $_POST['constelação'];
    $comentário = $_POST['comentário'];
    $nation = $_POST['nation'];
    $habilidade = $_POST['habilidade'];
 

        // pasta/diretório do personagem
        $dir_persona = '../../../../../assets/img/elements/'.$elemento.'/persona/'.lcfirst($nome).'';
        if(!is_dir($dir_persona)){ //se diretório não existe ele cria
            mkdir($dir_persona, 0755, true);
        }
        

        // ENVIO DE MULTIPLOS ARQUIVO usando for()
        if(isset($_FILES['up_img']) && empty($_FILES['up_img']) == false) { 
                
            $file = $_FILES['up_img'];
            $tmpName = $_FILES['up_img']['tmp_name'];
            $name = $_FILES['up_img']['name']; 

            if(count($tmpName) > 0){
                for($f=0; $f<count($tmpName); $f++){
                    move_uploaded_file( $tmpName[$f], $dir_persona.'/' . $name[$f] ); 

                }
            }
        }



    $insert_p_db = "UPDATE personagens SET 
       
        nome = '$nome', 
        title = '$title',
        elemento = '$elemento',
        star = '$star',
        arma = '$arma',
        niver = '$niver',
        afiliação = '$afiliação',
        constelação = '$constelação',
        comentário = '$comentário',
        nation = '$nation',
        habilidade = '$habilidade'

        WHERE id = '$id'
        ";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        document.querySelector("#edit_personagem .success").innerHTML= "Salvo com sucesso!";
        var value_selected = document.querySelector("#p_selected").value;
        $("#edit_personagem #viewer_img_p_db").load("assets/include/edit_db/personagens/viewer_img_p_db.php", {id:value_selected});
        setTimeout(function(){
            document.querySelector("#edit_personagem .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#edit_personagem .error").innerHTML= "Erro ao salvar alterações";
        setTimeout(function(){
            document.querySelector("#edit_personagem .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
        

        ?>
  <!--   <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="up_img[]"  multiple>
        <button type="submit">enviar</button>
    </form> -->