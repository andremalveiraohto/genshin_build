<?php
    session_start();
    include '../../../config.php';

/* if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') { */

    $groupid       = $_POST['group'];
    $groupid = explode('-', $groupid);
    $groupid = $groupid[0];

    if(isset($_POST['qtd_item'])){$qtd_item = $_POST['qtd_item'];}else{$qtd_item = '';}

    if(isset($_POST['title'])){$title = $_POST['title'];}else{$title = '';}
    if(isset($_POST['descrição'])){$descrição = $_POST['descrição'];}else{$descrição = '';}
    if(!empty($_POST['url_image']) && !isset($_FILES['url_image'])){$url_image = $_POST['url_image'];}else{$url_image = '';}
    if(!empty($_POST['id_video']) && !isset($_FILES['id_video'])){$id_video = $_POST['id_video'];}else{$id_video = '';}
 
    $inputCoord  = $_POST['coord'];

        //=====INCLUDE DA TABELA USER
        $session_id = $_SESSION['id'];
        $users = "SELECT * FROM user WHERE id = '$session_id'";
        $users = $pdo->query($users);
        $user = $users->fetch();
    
        $user_ID = $user['id'];
        $username = $user['user'];
        $nome_user = $user['nome'];
        $type_user = $user['type_user'];
        $user_Img = $user['img'];
   

    // INCLUDE DA TABELA MA
    $tableDataMarker = "SELECT * FROM map_marcadores WHERE coord='$inputCoord' ";
    $tableDataMarker = $pdo->query($tableDataMarker);
    $dataMarker = $tableDataMarker->rowCount();


    // INCLUDE DA TABELA MAP_GRUPOS
    $tableDataGrupo = "SELECT * FROM map_grupos WHERE id='$groupid'";
    $tableDataGrupo = $pdo->query($tableDataGrupo);
    $dataGrupo = $tableDataGrupo->fetch();

    $nation = $dataGrupo['nation'];
    $group = $dataGrupo['grupo'];
    $tipo = $dataGrupo['tipo'];

    

    //verifica se a coordenada já existe no banco de dados
    if($dataMarker >= 1){
        echo'Coordenadas já marcada<br>Informe outra! ';
    } else {
       
        $dataOk = true;
        $upImage = false;

        if($upImage){
            // pasta/diretório do personagem
            $dir_persona = '../img/iconsMap/locationImage/';
            if(!is_dir($dir_persona)){ //se diretório não existe ele cria
                mkdir($dir_persona, 0755, true);
            }
            $namesImages = '';
            // ENVIO DE MULTIPLOS ARQUIVO usando for()
            if(isset($_FILES['nameimg']) && empty($_FILES['nameimg']) == false) { 
                    
                $file = $_FILES['nameimg'];
                $sizeImg = $_FILES['nameimg']['size']; 
                $tmpName = $_FILES['nameimg']['tmp_name'];
                $nameImg = $_FILES['nameimg']['name']; 

                $namesImgs='';
                if(count($tmpName) > 0){
                    foreach($tmpName as $key => $tmpName){

                        $nameImg[$key] = explode('.', $nameImg[$key]);

                        $nameImgMD5[$key] = time().md5($nameImg[$key][0]);
                        $extension[$key] = '.'.$nameImg[$key][1];
            
                        $nameImg[$key] = $nameImgMD5[$key].$extension[$key];  
                        //envia a imagem para o diretório
                        move_uploaded_file( $tmpName, $dir_persona . $nameImg[$key]); 

                        $namesImgs .= $nameImg[$key].', ';
                    }
                }

                $namesImages = rtrim($namesImgs, ', ');
            
            }
        }

        if($dataOk == true){
            $insert_maker = "INSERT INTO map_marcadores SET 
            
                nation = '$nation',
                grupo = '$group',
                qtd_item = '$qtd_item',
                tipo = '$tipo',
                title = '$title',
                descrição = '$descrição',
                nameimg = '$url_image',
                id_video = '$id_video',
                coord = '$inputCoord',
                author = '$username'

            ";

            if($pdo->query($insert_maker)) {
                echo'<script>
                document.querySelector("#form_insert_marker .success").innerHTML= "Salvo com sucesso!";
                removeMarkers();
                loadMarkers();
                setTimeout(function(){
                    document.querySelector("#form_insert_marker .success").innerHTML= "";
                }, 5000);
                </script>';
            } else {
                
                echo'<script>
                document.querySelector("#form_insert_marker .error").innerHTML= "Erro ao salvar";
                setTimeout(function(){
                    document.querySelector("#form_insert_marker .error").innerHTML= "";
                }, 5000);
                </script>';
            } 
        }


    }// FIM verifica se a coordenada já existe no banco de dados

/* } else {
    echo'<div style="
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 3rem;
        color: #ff4700;
        font-family: monospace;
        background: black;
        margin: -8px;
    ">Acesso Negado!</div>';
} */