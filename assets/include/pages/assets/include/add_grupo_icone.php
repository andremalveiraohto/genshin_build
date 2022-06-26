<?php
    include '../../../config.php';

    $nation      = $_POST['nation'];
    $is_item        = $_POST['is_item'];
    $tipo        = $_POST['tipo'];
    $title        = $_POST['title'];
    $descrição        = $_POST['descrição'];

      
        $dataOk = true;

        // pasta/diretório do personagem
        $dir_persona = '../img/iconsMap/';
        if(!is_dir($dir_persona)){ //se diretório não existe ele cria
            mkdir($dir_persona, 0755, true);
        }
        

        // ENVIO DE MULTIPLOS ARQUIVO usando for()
        if(isset($_FILES['iconGrupo']) && empty($_FILES['iconGrupo']) == false) { 
                
            $file = $_FILES['iconGrupo'];
            $sizeImg = $_FILES['iconGrupo']['size']; 
            $tmpName = $_FILES['iconGrupo']['tmp_name'];
            $iconGrupo = $_FILES['iconGrupo']['name']; 

            $nameIMG = explode('.', $iconGrupo);
            $nameIMG = $nameIMG[0];
        }


        if($dataOk == true){
            $insert_maker = "INSERT INTO map_grupos SET 
            
                nation = '$nation',
                is_item = '$is_item',
                tipo = '$tipo',
                grupo = '$nameIMG',
                title = '$title',
                descrição = '$descrição'

            ";

            if($pdo->query($insert_maker)) {

                move_uploaded_file( $tmpName, $dir_persona . $iconGrupo); 

                echo'<script>
                document.querySelector("#form_insert_grupo .success").innerHTML= "Grupo salvo com sucesso!";
                removeMarkers();
                loadMarkers();
                document.querySelector("#form_insert_grupo").reset();
                document.querySelector("#form_insert_grupo .input span").innerHTML="";
                setTimeout(function(){
                    document.querySelector("#form_insert_grupo .success").innerHTML= "";
                }, 5000);
                </script>';
            } else {
                
                echo'<script>
                document.querySelector("#form_insert_grupo .error").innerHTML= "Erro ao salvar";
                setTimeout(function(){
                    document.querySelector("#form_insert_grupo .error").innerHTML= "";
                }, 5000);
                </script>';
            } 
        }
