<?php

include '../../../../assets/include/config.php';

    $nome = $_POST['nome'];
    if(!empty($_POST['title'])){$title = $_POST['title'];}else{$title = "Não Informado";}
    $elemento = $_POST['elemento'];
    $star = $_POST['star'];
    if(!empty($_POST['arma'])){$arma = $_POST['arma'];}else{$habilidade = "Não Informado";}
    if(!empty($_POST['niver'])){$niver = $_POST['niver'];}else{$habilidade = "Não Informado";}
    if(!empty($_POST['afiliação'])){$afiliação = $_POST['afiliação'];}else{$habilidade = "Não Informado";}
    if(!empty($_POST['constelação'])){$constelação = $_POST['constelação'];}else{$habilidade = "Não Informado";}
    $comentário = $_POST['comentário'];
    if(!empty($_POST['nation'])){$nation = $_POST['nation'];}else{$habilidade = "Não Informado";}
    $habilidade = $_POST['habilidade'];
 
    

    // pasta/diretório do personagem
    $dir_persona = '../../../../assets/img/elements/'.$elemento.'/persona/'.lcfirst($nome).'';
    if(!is_dir($dir_persona)){ //se diretório não existe ele cria
        mkdir($dir_persona, 0755, true);
    }


    $insert_p_db = "INSERT INTO personagens SET 
       
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
        ";

    if($pdo->query($insert_p_db)) {
        echo'<script>
        document.querySelector("#add_personagem .success").innerHTML= "Personagem <strong>'.$nome.'</strong> Inserido ao Banco de Dados com Sucesso!";
        $("#p_selected").load("assets/include/edit_db/personagens/select_p_db.php");
        $("#add_personagem form")[0].reset();
        setTimeout(function(){
            document.querySelector("#add_personagem .success").innerHTML= "";
        }, 5000);
        </script>';
    } else {
        
        echo'<script>
        document.querySelector("#add_personagem .error").innerHTML= "Erro ao inserir personagem ao Banco de Dados!";
        setTimeout(function(){
            document.querySelector("#add_personagem .error").innerHTML= "";
        }, 5000);
        </script>';
    }
 
        