<?php
session_start();
echo$session_id = $_SESSION['id'];

include '../../../../../assets/include/config.php';

  //=====INCLUDE DA TABELA USER
  $selectImg = "SELECT * FROM user WHERE id = '$session_id'";
  $selectImg = $pdo->query($selectImg);
  $selectImg = $selectImg->fetch();

  $user_Img = $selectImg['img'];
  $user_Pass = $selectImg['senha'];

//-----------------------------------------------------------------------


    $nome  = $_POST['nome'];
    $user  = $_POST['user'];
    

    if(!empty($_POST['senha'])){
        $senha = md5(addslashes($_POST['senha']));
    }else{
        $senha = $user_Pass;
    }

        // pasta/diretório do personagem
        $dir_user = '../../../img/users/ID-'.$session_id.'/';
        if(!is_dir($dir_user)){ //se diretório não existe ele cria
            mkdir($dir_user, 0755, true);
        }
        

        // ENVIO DE MULTIPLOS ARQUIVO usando for()
        if(isset($_FILES['img']) && empty($_FILES['img']) == false) { 
                
            $file = $_FILES['img'];
            $tmpName = $_FILES['img']['tmp_name'];
            $nameImg = $_FILES['img']['name']; 

            

            if(!empty($tmpName)){
                unlink($dir_user.$user_Img);
                move_uploaded_file( $tmpName, $dir_user . $nameImg ); 
            } else {
                $nameImg = $user_Img;
            }
        }


    $edit_account = "UPDATE user SET
       
        nome = '$nome', 
        user = '$user',
        senha = '$senha',
        img = '$nameImg'
        
        WHERE id = '$session_id'

        ";


if($pdo->query($edit_account)) {
    echo'<script>
    document.querySelector("#form_account .return").style.opacity = \'1\';
    document.querySelector("#form_account .return").innerHTML= "<h1>Salvo com Sucesso!</h1>";
    setTimeout(function(){
        document.querySelector("#form_account .return").innerHTML= "";
    }, 10000);
    $(".accountGrid").load("assets/include/load/account/user_grid.php");
    </script>';
} else {
    
    echo'<script>
    document.querySelector("#form_account .return").style.opacity = \'1\';
    document.querySelector("#form_account .return").innerHTML= "<h2>Erro ao salvar.</h2>";
    setTimeout(function(){
        document.querySelector("#form_account .return").innerHTML= "";
    }, 10000);
    </script>';
} 